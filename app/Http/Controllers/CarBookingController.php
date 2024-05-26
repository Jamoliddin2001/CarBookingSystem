<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\RoleCarCategories;
use App\Models\RoleUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CarBookingController extends Controller
{
    public function getAvailableCars(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);
        if ($validator->fails())
            return response()->json($validator->errors(), 422);

        $userId = $request->input('user_id');
        $startTime = Carbon::parse($request->input('start_time'));
        $endTime = Carbon::parse($request->input('end_time'));
        $modelFilter = $request->input('model');
        $category_id = $request->input('category_id');

        $user = User::find($userId);
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $roleUser = RoleUser::where('user_id', $user->id)->first();

        $availableCategories = RoleCarCategories::where('role_id', $roleUser->role_id)->get();
        $availableCategoryIds = [];
        foreach ($availableCategories as $availableCategory)
            array_push($availableCategoryIds, $availableCategory->category_id);

        $cars = Cars::whereNotIn('id', function ($query) use ($startTime, $endTime) {
            $query
                ->select('car_id')
                ->from('bookings')
                ->whereBetween('start_time', [$startTime, $endTime])
                ->orWhereBetween('end_time', [$startTime, $endTime])
                ->orWhere(function ($query) use ($startTime, $endTime) {
                    $query
                        ->where('start_time', '<=', $startTime)
                        ->where('end_time', '>=', $endTime);
                });
        });

        $cars->wherein('category_id', $availableCategoryIds);

        if ($modelFilter) {
            $cars->where('model', 'like', '%' . $modelFilter . '%');
        }

        if ($category_id) {
            $cars->where('category_id', $category_id);
        }

        $availableCars = $cars->with(['category', 'driver'])->get();

        return response()->json($availableCars);
    }
}

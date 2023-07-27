<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutPlannerController extends Controller
{
    public function store(Request $request)
    {
        $selectedSplit = $request->input('split');

        // Assuming you have an array of days of the week
        $daysOfWeek = array(
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        );

        // Workout Split Plans
        $workoutSplits = array(
            'Push-Pull-Legs' => array(
                'Monday' => array(
                    'Push Workout' => array(
                        'Bench Press' => '4 sets x 6-8 reps',
                        'Overhead Press' => '4 sets x 8-10 reps',
                        'Incline Dumbbell Press' => '3 sets x 10-12 reps',
                        'Dips' => '3 sets x 10-12 reps',
                        'Tricep Pushdowns' => '3 sets x 10-12 reps',
                    ),
                ),
                'Tuesday' => array(
                    'Pull Workout' => array(
                        'Deadlifts' => '4 sets x 6-8 reps',
                        'Pull-Ups' => '4 sets x 8-10 reps',
                        'Bent-Over Barbell Rows' => '4 sets x 8-10 reps',
                        'Face Pulls' => '3 sets x 10-12 reps',
                        'Barbell Curls' => '3 sets x 10-12 reps',
                    ),
                ),
                'Wednesday' => array(
                    'Legs Workout' => array(
                        'Squats' => '4 sets x 6-8 reps',
                        'Romanian Deadlifts' => '4 sets x 8-10 reps',
                        'Leg Press' => '3 sets x 10-12 reps',
                        'Leg Curls' => '3 sets x 10-12 reps',
                        'Calf Raises' => '4 sets x 12-15 reps',
                    ),
                ),
                'Thursday' => array(
                    'Push Workout' => array(
                        'Overhead Press' => '4 sets x 6-8 reps',
                        'Bench Press' => '4 sets x 8-10 reps',
                        'Incline Dumbbell Press' => '3 sets x 10-12 reps',
                        'Dips' => '3 sets x 10-12 reps',
                        'Tricep Pushdowns' => '3 sets x 10-12 reps',
                    ),
                ),
                'Friday' => array(
                    'Pull Workout' => array(
                        'Deadlifts' => '4 sets x 6-8 reps',
                        'Chin-Ups' => '4 sets x 8-10 reps',
                        'Barbell Rows' => '4 sets x 8-10 reps',
                        'Face Pulls' => '3 sets x 10-12 reps',
                        'Barbell Curls' => '3 sets x 10-12 reps',
                    ),
                ),
                'Saturday' => array(
                    'Legs Workout' => array(
                        'Front Squats' => '4 sets x 6-8 reps',
                        'Leg Press' => '4 sets x 8-10 reps',
                        'Hamstring Curls' => '3 sets x 10-12 reps',
                        'Calf Raises' => '4 sets x 12-15 reps',
                    ),
                ),
                'Sunday' => 'Rest',
            ),
            'Bro Split' => array(
                'Monday' => array(
                    'Chest' => array(
                        'Bench Press' => '4 sets x 6-8 reps',
                        'Incline Dumbbell Press' => '4 sets x 8-10 reps',
                        'Dumbbell Flyes' => '3 sets x 10-12 reps',
                        'Cable Crossovers' => '3 sets x 12-15 reps',
                        'Push-Ups' => '3 sets x 12-15 reps',
                    ),
                ),
                'Tuesday' => array(
                    'Back' => array(
                        'Deadlifts' => '4 sets x 6-8 reps',
                        'Pull-Ups or Lat Pulldowns' => '4 sets x 8-10 reps',
                        'Bent-Over Barbell Rows' => '4 sets x 8-10 reps',
                        'Seated Cable Rows' => '3 sets x 10-12 reps',
                        'Hyperextensions (Back Extensions)' => '3 sets x 12-15 reps',
                    ),
                ),
                'Wednesday' => array(
                    'Legs' => array(
                        'Squats' => '4 sets x 6-8 reps',
                        'Leg Press' => '4 sets x 8-10 reps',
                        'Leg Extensions' => '3 sets x 10-12 reps',
                        'Romanian Deadlifts' => '4 sets x 8-10 reps',
                        'Leg Curls' => '3 sets x 10-12 reps',
                        'Standing Calf Raises' => '4 sets x 12-15 reps',
                    ),
                ),
                'Thursday' => array(
                    'Shoulders' => array(
                        'Military Press (Overhead Press)' => '4 sets x 6-8 reps',
                        'Dumbbell Lateral Raises' => '4 sets x 8-10 reps',
                        'Front Dumbbell Raises' => '3 sets x 10-12 reps',
                        'Bent-Over Dumbbell Reverse Flyes' => '3 sets x 10-12 reps',
                        'Barbell Shrugs' => '4 sets x 10-12 reps',
                    ),
                ),
                'Friday' => array(
                    'Arms' => array(
                        'Barbell Bicep Curls' => '4 sets x 8-10 reps',
                        'Dumbbell Hammer Curls' => '3 sets x 10-12 reps',
                        'Preacher Curls' => '3 sets x 10-12 reps',
                        'Skull Crushers (Lying Tricep Extensions)' => '4 sets x 8-10 reps',
                        'Tricep Dips' => '3 sets x 10-12 reps',
                        'Cable Tricep Pushdowns' => '3 sets x 10-12 reps',
                    ),
                ),
                'Saturday' => 'Rest',
                'Sunday' => 'Rest',
            ),
            'Upper-Lower' => array(
                'Monday' => array(
                    'Upper Body Workout' => array(
                        'Bench Press' => '4 sets x 6-8 reps',
                        'Overhead Press' => '4 sets x 8-10 reps',
                        'Incline Dumbbell Press' => '3 sets x 10-12 reps',
                        'Pull-Ups' => '4 sets x 8-10 reps',
                        'Barbell Rows' => '4 sets x 8-10 reps',
                        'Face Pulls' => '3 sets x 10-12 reps',
                        'Barbell Curls' => '3 sets x 10-12 reps',
                    ),
                ),
                'Tuesday' => array(
                    'Lower Body Workout' => array(
                        'Squats' => '4 sets x 6-8 reps',
                        'Romanian Deadlifts' => '4 sets x 8-10 reps',
                        'Leg Press' => '3 sets x 10-12 reps',
                        'Leg Curls' => '3 sets x 10-12 reps',
                        'Calf Raises' => '4 sets x 12-15 reps',
                    ),
                ),
                'Wednesday' => 'Rest',
                'Thursday' => array(
                    'Upper Body Workout' => array(
                        'Overhead Press' => '4 sets x 6-8 reps',
                        'Bench Press' => '4 sets x 8-10 reps',
                        'Incline Dumbbell Press' => '3 sets x 10-12 reps',
                        'Pull-Ups' => '4 sets x 8-10 reps',
                        'Barbell Rows' => '4 sets x 8-10 reps',
                        'Face Pulls' => '3 sets x 10-12 reps',
                        'Barbell Curls' => '3 sets x 10-12 reps',
                    ),
                ),
                'Friday' => array(
                    'Lower Body Workout' => array(
                        'Deadlifts' => '4 sets x 6-8 reps',
                        'Front Squats' => '4 sets x 8-10 reps',
                        'Leg Press' => '3 sets x 10-12 reps',
                        'Hamstring Curls' => '3 sets x 10-12 reps',
                        'Calf Raises' => '4 sets x 12-15 reps',
                    ),
                ),
                'Saturday' => 'Rest',
                'Sunday' => 'Rest',
            ),
        );

        // Validate the selected split against the available options
        if (!array_key_exists($selectedSplit, $workoutSplits)) {
            // Handle invalid selection, e.g., redirect back with an error message
            return redirect()->back()->with('error', 'Invalid workout split selected.');
        }

        // Prepare the workout plan for display
        $workoutPlan = $workoutSplits[$selectedSplit];

        // Return the view with the workout plan data
        return view('workout-planner', compact('workoutPlan'));
    }
}

//TASK 1
        DB::table('students')->get();

//TASK 2
        DB::table('students')->where('grade', $grade)->get();

//TASK 3
        DB::table('students')->whereBetween('age', [$min, $max])->get();

//TASK 4
        DB::table('students')->where('city', $city)->get(); 

//TASK 5
        DB::table('students')->orderBy('age', 'desc')->get();

//TASK 6
        DB::table('students')
            ->leftJoin('teachers', 'students.teacher_id', '=', 'teachers.id')
            ->select('students.*', 'teachers.name AS teacher_name')
            ->get();

//TASK 7
        DB::table('teachers')
            ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
            ->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
            ->groupBy('teachers.id')
            ->get();       

//TASK 8
        DB::table('students')
            ->join('subjects', 'students.subject_id', '=', 'subjects.id')
            ->select('students.*', 'subjects.name AS subject_name')
            ->get();

//TASK 9
        DB::table('students')
            ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
            ->select('students.*', DB::raw('AVG(scores.score) AS average_score'))
            ->groupBy('students.id')
            ->get();

//TASK 10
        DB::table('teachers')
            ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
            ->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
            ->groupBy('teachers.id')
            ->orderBy('student_count', 'desc')
            ->limit(5)
            ->get();

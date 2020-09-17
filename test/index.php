
<?php

$students = [ 
    "student_1" =>
    [
        "Name" => "Faheema",
        "Age" => 23,
        "Roll_Number" => 79,
        "Status" => 1
    ],
    "student_2" =>
    [
        "Name" => "Farkhunda",
        "Age" => 22,
        "Roll_Number" => 34,
        "Status" => 1
    ],
    "student_3" =>
    [
        "Name" => "Ayesha",
        "Age" => 12,
        "Roll_Number" => 80,
        "Status" => 0
    ],
    "student_4" =>
    [
        "Name" => "Mariyam",
        "Age" => 29,
        "Roll_Number" => 60,
        "Status" => 0
    ],
    "student_5" =>
    [
        "Name" => "Dania",
        "Age" => 21,
        "Roll_Number" => 82,
        "Status" => 0
    ]



    ];

    $result = [

        "79" =>
        [
            "HTML" => 20,
            "Css" => 30,
            "Javascript" => 40,
            "Php" => 50

        ],
        
        "34" =>
        [
            "HTML" => 50,
            "Css" => 60,
            "Javascript" =>70,
            "Php" => 80

        ],
        
        "80" =>
        [
            "HTML" => 90,
            "Css" => 100,
            "Javascript" => 10,
            "Php" => 20

        ],
        
        "60" =>
        [
            "HTML" => 30,
            "Css" => 40,
            "Javascript" => 50,
            "Php" => 60

        ],
        
        "82" =>
        [
            "HTML" => 70,
            "Css" => 80,
            "Javascript" => 90,
            "Php" => 100

        ],

    ];



foreach ($students as $student__)
{



    foreach ($student__ as $key => $value)
    {
        if($student__["Status"])
        {
            echo "$key: $value <br>"; 
            echo "----------------------------------------";
            echo "<br>";
            $roll_no =  $student__["Roll_Number"];
         
            
                foreach($result as $marks)

                {
                    
                        foreach($marks as $subject => $no){


                            echo "$subject: $no"; 
                            // grade($no);
                    }
                    
                //    foreach($marks as $subject => )
                   
                //    echo "$subject: $numbers <br>"; 
                  


                }

        
                
            

        }

    }
}

// function grade($subject_marks){

//     for($i = 0; $i <= 4; $i++)
//     {
//         $subject_marks += $subject_marks;
        
//     }
//     $total = ($subject_marks/100)*100;

//     if($total >= 90)
//     {
//         echo "Grade : A" ;
//     }
//     elseif($total >=80 && $total < 90)
//     {
//         echo "Grade : B";
//     }
//     elseif($total >=70 && $total < 80)
//     {
//         echo "Grade : C";
//     }
//     elseif($total >=70 && $total < 60)
//     {
//         echo "Grade : d";
//     }
//     else
//     {
//         echo "Fail";
//     }

// }





 
?>
<?php


final class Student
{
    private $_S_message = "Hi I'm a student and I study yay";

    public function getStudentGroups()
    {
        $nbgroups = 3;

        $json = file_get_contents('http://mvc_tp1.com/students.json');

        $json_data = json_decode($json, true);

        $json_print = "";
        shuffle($json_data);

        if (isset($_GET['nb_groups'])) {
            for ($i = 0; $i <= $_GET['nb_groups']; $i++) {
                //$studentpergroup = intval(count($json_data) / $_GET['nb_groups']);
                $studentpergroup = $_GET['nb_groups'];
                for ($j = $i * $studentpergroup; $j < ($i + 1) * $studentpergroup; $j++) {
                    if (isset($json_data[$j])) {
                        if($j == $i * $studentpergroup) {
                            $json_print = $json_print . PHP_EOL;
                            if($j != 0)
                            {
                                $json_print = $json_print . PHP_EOL . "</ul>" . PHP_EOL . "</div>" . PHP_EOL . "</div>" . PHP_EOL;
                            }
                            $json_print = $json_print . "<div class='column'>" . PHP_EOL . "<div class='section'>" . PHP_EOL . "<p class='subtitle'> Groupe n°" . $i+1 . "</p>" . PHP_EOL . "<ul>";
                        }
                        $json_print = $json_print . PHP_EOL . "<li>" . implode(" ", $json_data[$j])  . "</li>";
                    }
                }
            }

            $json_print = $json_print . PHP_EOL . "</ul>" . PHP_EOL . "</div>" . PHP_EOL . "</div>" . PHP_EOL;

            /*
             for ($i = 0; $i <= $_GET['nb_groups']; $i++) {
                $studentpergroup = round(count($json_data) / $_GET['nb_groups']);
                for ($j = $i * $studentpergroup; $j < ($i + 1) * $studentpergroup; $j++) {
                    if (isset($json_data[$j])) {
                        if($j == $i * $studentpergroup) {
                            if( $i == $_GET['nb_groups'] && array_slice( $json_data, $i * $studentpergroup, count($json_data)) >= $_GET['nb_groups'])
                            {
                            } else {
                                $json_print = $json_print . "</br>" . PHP_EOL;
                                $json_print = $json_print . "<p> Groupe n°" . $i+1 . "</p>";
                            }
                        }
                        $json_print = $json_print . "<li>" . implode(" ", $json_data[$j]) . PHP_EOL . "</br> </li>";
                    }
                }
            }
             */

            return $json_print;
        }

    }

}

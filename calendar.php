<link rel="stylesheet" type="text/css" href="calendar_style.css" media="screen"/>

<?php
    require ('getBusyDays.php');
    
    $curentMonthNumber=date('n'); //Numarul luni din an

    $day=date('j');
    $year=date('Y');
    $month_text= ['January','February','March','April ','May ','June ','July ','August ','September ','October ','November ','December'];

    if (isset($_GET['month'])){
        if($_GET['month']<=12){
              $monthChange=$_GET['month'];
        }else {
                $monthChange=1;
        }
        }
     else{
        $monthChange=$curentMonthNumber;
    }

    $month=date('l',mktime(0,0,0,$monthChange,1,$year)); //Prima zi din luna

    switch ($month) {
    case 'Monday':
            $firstDayOfMonth=1;
            break;
    case 'Tuesday':
            $firstDayOfMonth=2;
            break;
    case 'Wednesday':
            $firstDayOfMonth=3;
            break;
    case 'Thursday':
            $firstDayOfMonth=4;
            break;
    case 'Friday':
            $firstDayOfMonth=5;
            break;
    case 'Saturday':
            $firstDayOfMonth=6;
            break;
    case 'Sunday':
            $firstDayOfMonth=7;
            break;
    }

    $daysOf_Month=date('t',mktime(0,0,0,$monthChange,25,$year));
    $daysOf_Month_old=date('t',mktime(0,0,0,$monthChange-1,25,$year));

?>

<div id="wrap-calendar">

    <div class="month">
        <ul>
            <a href="bookingPage.php?month=<?php if ($monthChange==1) {echo 12;} elseif($monthChange<$curentMonthNumber){echo $monthChange-1;}else{echo $monthChange-1;}?>"
         class="prev">&#10094;</a>
            <a href="bookingPage.php?month=<?php if ($monthChange==12) {echo 1;} elseif($monthChange<$curentMonthNumber){echo $monthChange+1;}else{echo $monthChange+1;}?>" class="next">&#10095;</a>


            <li id="ctm">
                <?php echo $month_text[$monthChange-1]; ?><br>
                <span style="font-size:18px"><?php echo $year; ?></span>
            </li>
        </ul>
    </div>

    <ul class="weekdays">
        <li>Mon</li>
        <li>Tue</li>
        <li>Wed</li>
        <li>Thu</li>
        <li>Fri</li>
        <li>Sat</li>
        <li>Sun</li>
        
    </ul>

    <ul class="days">
        <?php

            if ($firstDayOfMonth == 1) {
                $i=1;
                while($i<=$daysOf_Month)
                {
                    if($i<10)
                    $i2='0'.$i;
                    else
                    $i2=$i;

                    if(verifData($year."-".$monthChange."-".$i2,$vectorZileOcupate,$contorZileOcupate))
                        echo '<li id="selected'.$i.'" onclick="notSelect()" ><span title="Zi Ocupata" class="ziOcupata">'.$i.'</span></li>';
                    else
                        echo '<li id="selected'.$i.'" onclick="selecteazaDataProgramare('.$year.','.$monthChange.','.$i.','.$daysOf_Month.')">'.$i.'</li>';

                    $i++;
                }
            }else{
                for ($j=$daysOf_Month_old-$firstDayOfMonth+1;$j<=$daysOf_Month_old; $j++) {
                    echo '<li><span class="old_day">'.$j.'</span></li>';
                }

                $i=1;
                while($i<=$daysOf_Month)
                {
                    if($i<10)
                    $i2='0'.$i;
                    else
                    $i2=$i;

                    if(verifData($year."-".$monthChange."-".$i2,$vectorZileOcupate,$contorZileOcupate))
                        echo '<li id="selected'.$i.'" onclick="notSelect()" ><span title="Zi Ocupata" class="ziOcupata">'.$i.'</span></li>';
                    else
                        echo '<li id="selected'.$i.'" onclick="selecteazaDataProgramare('.$year.','.$monthChange.','.$i.','.$daysOf_Month.')">'.$i.'</li>';
                
                    $i++;
                }

            }

        ?>
    </ul>


</div>
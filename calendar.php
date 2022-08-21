<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上萬年曆</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        body{
            
            background:url(./img/wood03.jpg) no-repeat;

        }
       
        .nav{
            display: flex;
            width: 450px;
            height: 50px;
            margin: 10px auto;
            justify-content: space-between;
            font-size:2rem;
            margin-left: 700px;
            color: #555;
        }
        .nav a{
            text-decoration: none;
            color: #555;
        }

        .nav a:hover{
            background-color: lightgrey;
        }

        .table{
            
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 450px;
            height: 420px;
            margin: 20px 700px;
            /* padding: -30px 0; */
            backdrop-filter: blur(7px);
            border-radius: 10px;
            /* box-shadow: 5px 10px 10px gray; */   
        }
        

        .table div{
            display: flex;
            flex-wrap: wrap;
            flex-basis: 60px;
            height: 60px;
            justify-content: center;
            font-size: 1.5rem;   
        }

        .table div:hover{
            background-color: lightgoldenrodyellow
        }

       

        .select{
            display: flex;
            flex-wrap: wrap;

            margin-top:50px ;
            margin-left: 400px;
            
        }

      

        .header-sun , .header-sat,.weekend{
            color: red;
        }
        .weekday{
            color: #555;
        }
       
       
      
        
       
    </style>
</head>


<!--Step2:設置切換月份按鈕及參數設定-->
<?php
if(isset($_GET['month'])){ /*若GET有值，採用GET的值，否則採用當前的年月*/
    $month=$_GET['month'];
    $year=$_GET['year'];
}else{
    $month=date("n");
    $year=date("Y");
}

switch($month){
    case 1:
        $preMonth=12;
        $preYear=$year - 1;
        $nextMonth=$month + 1;
        $nextYear=$year;
    break;

    case 12:
        $preMonth=$month - 1;
        $preYear=$year;
        $nextMonth=1;
        $nextYear=$year + 1;
    break;

    default:
    $preMonth=$month - 1;
    $preYear=$year;
    $nextMonth=$month + 1;
    $nextYear=$year;
    break;
}
?>


<body>
<div>
    <main>

        <!--年、月份切換-->
        <!--接收選單年月傳值處理-->
        <div class="select">
            <form action="calendar.php" method="GET">
                <label for="year">選擇的年份：</label>
                <select name="year" id="year">    
                <option value="1901">1901</option>    
                <option value="1902">1902</option>    
                <option value="1903">1903</option>    
                <option value="1904">1904</option>    
                <option value="1905">1905</option>    
                <option value="1906">1906</option>    
                <option value="1907">1907</option>    
                <option value="1908">1908</option>    
                <option value="1909">1909</option>    
                <option value="1910">1910</option>    
                <option value="1911">1911</option>    
                <option value="1912">1912</option>    
                <option value="1913">1913</option>    
                <option value="1914">1914</option>    
                <option value="1915">1915</option>    
                <option value="1916">1916</option>    
                <option value="1917">1917</option>    
                <option value="1918">1918</option>    
                <option value="1919">1919</option>    
                <option value="1920">1920</option>    
                <option value="1921">1921</option>    
                <option value="1922">1922</option>    
                <option value="1923">1923</option>    
                <option value="1924">1924</option>    
                <option value="1925">1925</option>    
                <option value="1925">1925</option>    
                <option value="1926">1926</option>    
                <option value="1927">1927</option>    
                <option value="1928">1928</option>    
                <option value="1929">1929</option>    
                <option value="1930">1930</option>    
                <option value="1931">1931</option>    
                <option value="1932">1932</option>    
                <option value="1933">1933</option>    
                <option value="1934">1934</option>    
                <option value="1935">1935</option>    
                <option value="1936">1936</option>    
                <option value="1937">1937</option>    
                <option value="1938">1938</option>    
                <option value="1939">1939</option>    
                <option value="1940">1940</option>    
                <option value="1941">1941</option>    
                <option value="1942">1942</option>    
                <option value="1943">1943</option>    
                <option value="1944">1944</option>    
                <option value="1945">1945</option>    
                <option value="1946">1946</option>    
                <option value="1947">1947</option>    
                <option value="1948">1948</option>    
                <option value="1949">1949</option>    
                <option value="1950">1950</option>    
                <option value="1951">1951</option>    
                <option value="1952">1952</option>    
                <option value="1953">1953</option>    
                <option value="1954">1954</option>    
                <option value="1955">1955</option>    
                <option value="1956">1956</option>    
                <option value="1957">1957</option>    
                <option value="1958">1958</option>    
                <option value="1959">1959</option>    
                <option value="1960">1960</option>    
                <option value="1961">1961</option>    
                <option value="1962">1962</option>    
                <option value="1963">1963</option>    
                <option value="1964">1964</option>    
                <option value="1965">1965</option>    
                <option value="1966">1966</option>    
                <option value="1967">1967</option>    
                <option value="1968">1968</option>    
                <option value="1969">1969</option>    
                <option value="1970">1970</option>    
                <option value="1971">1971</option>    
                <option value="1972">1972</option>    
                <option value="1973">1973</option>    
                <option value="1974">1974</option>    
                <option value="1975">1975</option>    
                <option value="1976">1976</option>    
                <option value="1977">1977</option>    
                <option value="1978">1978</option>    
                <option value="1979">1979</option>    
                <option value="1980">1980</option>    
                <option value="1981">1981</option>    
                <option value="1982">1982</option>    
                <option value="1983">1983</option>    
                <option value="1984">1984</option>    
                <option value="1985">1985</option>    
                <option value="1986">1986</option>    
                <option value="1987">1987</option>    
                <option value="1988">1988</option>    
                <option value="1989">1989</option>    
                <option value="1990">1990</option>    
                <option value="1991">1991</option>    
                <option value="1992">1992</option>    
                <option value="1993">1993</option>    
                <option value="1994">1994</option>    
                <option value="1995">1995</option>    
                <option value="1996">1996</option>    
                <option value="1997">1997</option>    
                <option value="1998">1998</option>    
                <option value="1999">1999</option>    
                <option value="2000">2000</option>    
                <option value="2001">2001</option>    
                <option value="2002">2002</option>    
                <option value="2003">2003</option>    
                <option value="2004">2004</option>    
                <option value="2005">2005</option>    
                <option value="2006">2006</option>    
                <option value="2007">2007</option>    
                <option value="2008">2008</option>    
                <option value="2009">2009</option>    
                <option value="2010">2010</option>    
                <option value="2011">2011</option>    
                <option value="2012">2012</option>    
                <option value="2013">2013</option>    
                <option value="2014">2014</option>    
                <option value="2015">2015</option>    
                <option value="2016">2016</option>    
                <option value="2017">2017</option>    
                <option value="2018">2018</option>    
                <option value="2019">2019</option>    
                <option value="2020">2020</option>    
                <option value="2021">2021</option>    
                <option value="2022">2022</option>    
                <option value="2023">2023</option>    
                <option value="2024">2024</option>    
                <option value="2025">2025</option>    
                <option value="2026">2026</option>    
                <option value="2027">2027</option>    
                <option value="2028">2028</option>    
                <option value="2029">2029</option>    
                <option value="2030">2030</option>    
                <option value="2031">2031</option>    
                <option value="2032">2032</option>    
                <option value="2033">2033</option>    
                <option value="2034">2034</option>    
                <option value="2035">2035</option>    
                <option value="2036">2036</option>    
                <option value="2037">2037</option>    
                <option value="2038">2038</option>     
                <option value="2039">2039</option>     
                <option value="2040">2040</option>     
                <option value="2041">2041</option>     
                <option value="2042">2042</option>     
                <option value="2043">2043</option>     
                <option value="2044">2044</option>     
                <option value="2045">2045</option>     
                <option value="2046">2046</option>     
                <option value="2047">2047</option>     
                <option value="2048">2048</option>     
                <option value="2049">2049</option>     
                <option value="2050">2050</option>     
                </select>
                
                <label for="month">選擇的月份：</label>
                <select name="month" id="month">
                <option value="1">1月</option>
                <option value="2">2月</option>
                <option value="3">3月</option>
                <option value="4">4月</option>
                <option value="5">5月</option>
                <option value="6">6月</option>
                <option value="7">7月</option>
                <option value="8">8月</option>
                <option value="9">9月</option>
                <option value="10">10月</option>
                <option value="11">11月</option>
                <option value="12">12月</option>
                </select>

                <input type="submit" value="前往">

                <input type="button" value="今天的月份" name="button" onclick="location.href='calendar.php'">
            </form>
        </div>
        
        



        <div class="nav">
            <span>
            <a href="calendar.php?year=<?=$preYear;?>&month=<?=$preMonth;?>"><i class="fa-solid fa-caret-left"></i></a>
            </span>
            <span>
                <a href=""><?=$year;?>年</a>
            </span>
            <span>
                <a href=""><?=$month;?>月</a>
            </span>
            <span>
                <a href="calendar.php?year=<?=$nextYear;?>&month=<?=$nextMonth;?>"><i class="fa-solid fa-caret-right"></i></a>
            </span>
        </div>
            <!--月份切換-->
            <?php
            $firstDay=$year."-".$month."-1";
            $firstWeekday=date("w",strtotime($firstDay));/*第一天是一週裡的第幾天(索引值)*/
            $monthDays=date("t",strtotime($firstDay));
            $lastDay=$year."-".$month."-".$monthDays;/*最後一天日期等同於月份的天數*/
            $today=date("Y-m-d");
            $lastWeekday=date("w",strtotime($lastDay));

            $dateHouse=[];/*假設一個空陣列放日期*/

            for($i=0;$i<$firstWeekday;$i++){
            $dateHouse[]="";
            }
            for($i=0;$i<$monthDays;$i++){
            $date=date("Y-m-d",strtotime("+$i days",strtotime($firstDay)));
            $dateHouse[]=$date;
            }
            for($i=0;$i<(6-$lastWeekday);$i++){
            $dateHouse[]="";
            }

            ?>




        

            <!--Step1:繪製表格-->
            <!--表格內容start-->
            <div class="table">
                <div class="header-sun">SUN</div>
                <div class="header-mon">MON</div>
                <div class="header-tue">TUE</div>
                <div class="header-wed">WED</div>
                <div class="header-thu">THU</div>
                <div class="header-fri">FRI</div>
                <div class="header-sat">SAT</div>
                
        

                <!--Strp3:日期顯示格式轉換&周末判斷-->
                <?php
                foreach($dateHouse as $key => $day){   /**用$key走訪陣列$dateHouse，並將內容元素指定給$day*/
                $hol=($key % 7 == 0 || $key % 7 == 6) ? "weekend" :"weekday"; /**這邊等於是if($k%7==0 || $k%7==6){$hol='weekend';}else{$hol="";} */
    
                if(!empty($day)){
                $dayFormat=date("j", strtotime($day));
                echo "<div class='{$hol}'>{$dayFormat}</div>";
                }else{
                echo "<div class='{$hol}'></div>";
                }    
                }
                ?>
            </div>
            <!--表格內容end-->
    </main>    
</div>
</div>
</body>
</html>
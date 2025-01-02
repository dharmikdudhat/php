<!-- Question: Determine the largest number in an array.
Example Array: [10, 20, 4, 45, 99]
Expected Output: 99 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       // $array = [10, 20, 4, 45, 99];
        $array = array(
            array("val0"=>"city", "val1"=>"lat", "val2"=>"lng", "val3"=>"country", "val4"=>"iso2", "val5"=>"admin_name", "val6"=>"capital", "val7"=>"population", "val8"=>"population_proper"),
            array("val0"=>"Delhi", "val1"=>"28.6100", "val2"=>"77.2300", "val3"=>"India", "val4"=>"IN", "val5"=>"Delhi", "val6"=>"admin", "val7"=>"32226000", "val8"=>"16753235"),
            array("val0"=>"Mumbai", "val1"=>"19.0761", "val2"=>"72.8775", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"admin", "val7"=>"24973000", "val8"=>"12478447"),
            array("val0"=>"Kolkāta", "val1"=>"22.5675", "val2"=>"88.3700", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"admin", "val7"=>"18502000", "val8"=>"4496694"),
            array("val0"=>"Bangalore", "val1"=>"12.9789", "val2"=>"77.5917", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"admin", "val7"=>"15386000", "val8"=>"8443675"),
            array("val0"=>"Chennai", "val1"=>"13.0825", "val2"=>"80.2750", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"admin", "val7"=>"12395000", "val8"=>"6727000"),
            array("val0"=>"Hyderābād", "val1"=>"17.3617", "val2"=>"78.4747", "val3"=>"India", "val4"=>"IN", "val5"=>"Telangāna", "val6"=>"admin", "val7"=>"10494000", "val8"=>"6993262"),
            array("val0"=>"Pune", "val1"=>"18.5203", "val2"=>"73.8567", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"8231000", "val8"=>"3124458"),
            array("val0"=>"Ahmedabad", "val1"=>"23.0225", "val2"=>"72.5714", "val3"=>"India", "val4"=>"IN", "val5"=>"Gujarāt", "val6"=>"minor", "val7"=>"8009000", "val8"=>"5570585"),
            array("val0"=>"Sūrat", "val1"=>"21.1702", "val2"=>"72.8311", "val3"=>"India", "val4"=>"IN", "val5"=>"Gujarāt", "val6"=>"", "val7"=>"6538000", "val8"=>"4466826"),
            array("val0"=>"Lucknow", "val1"=>"26.8500", "val2"=>"80.9500", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"admin", "val7"=>"3382000", "val8"=>"3382000"),
            array("val0"=>"Jaipur", "val1"=>"26.9000", "val2"=>"75.8000", "val3"=>"India", "val4"=>"IN", "val5"=>"Rājasthān", "val6"=>"admin", "val7"=>"3073350", "val8"=>"3073350"),
            array("val0"=>"Kanpur", "val1"=>"26.4499", "val2"=>"80.3319", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"2701324", "val8"=>"2701324"),
            array("val0"=>"Mirzāpur", "val1"=>"25.1460", "val2"=>"82.5690", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"2496970", "val8"=>"2496970"),
            array("val0"=>"Nāgpur", "val1"=>"21.1497", "val2"=>"79.0806", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"2405665", "val8"=>"2405665"),
            array("val0"=>"Ghāziābād", "val1"=>"28.6700", "val2"=>"77.4200", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"2375820", "val8"=>"2375820"),
            array("val0"=>"Supaul", "val1"=>"26.1260", "val2"=>"86.6050", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"2229076", "val8"=>"2229076"),
            array("val0"=>"Vadodara", "val1"=>"22.3000", "val2"=>"73.2000", "val3"=>"India", "val4"=>"IN", "val5"=>"Gujarāt", "val6"=>"", "val7"=>"2065771", "val8"=>"2065771"),
            array("val0"=>"Rājkot", "val1"=>"22.3000", "val2"=>"70.7833", "val3"=>"India", "val4"=>"IN", "val5"=>"Gujarāt", "val6"=>"", "val7"=>"2043000", "val8"=>"2043000"),
            array("val0"=>"Vishākhapatnam", "val1"=>"17.7042", "val2"=>"83.2978", "val3"=>"India", "val4"=>"IN", "val5"=>"Andhra Pradesh", "val6"=>"", "val7"=>"2035922", "val8"=>"2035922"),
            array("val0"=>"Indore", "val1"=>"22.7167", "val2"=>"75.8472", "val3"=>"India", "val4"=>"IN", "val5"=>"Madhya Pradesh", "val6"=>"", "val7"=>"1994397", "val8"=>"1994397"),
            array("val0"=>"Thāne", "val1"=>"19.1972", "val2"=>"72.9722", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"1886941", "val8"=>"1886941"),
            array("val0"=>"Bhopāl", "val1"=>"23.2599", "val2"=>"77.4126", "val3"=>"India", "val4"=>"IN", "val5"=>"Madhya Pradesh", "val6"=>"admin", "val7"=>"1798218", "val8"=>"1798218"),
            array("val0"=>"Pimpri-Chinchwad", "val1"=>"18.6186", "val2"=>"73.8037", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"1727692", "val8"=>"1727692"),
            array("val0"=>"Patna", "val1"=>"25.5940", "val2"=>"85.1376", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"admin", "val7"=>"1684222", "val8"=>"1684222"),
            array("val0"=>"Bilāspur", "val1"=>"22.0900", "val2"=>"82.1500", "val3"=>"India", "val4"=>"IN", "val5"=>"Chhattīsgarh", "val6"=>"", "val7"=>"1625502", "val8"=>"1625502"),
            array("val0"=>"Ludhiāna", "val1"=>"30.9100", "val2"=>"75.8500", "val3"=>"India", "val4"=>"IN", "val5"=>"Punjab", "val6"=>"", "val7"=>"1618879", "val8"=>"1618879"),
            array("val0"=>"Āgra", "val1"=>"27.1800", "val2"=>"78.0200", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"1585704", "val8"=>"1585704"),
            array("val0"=>"Madurai", "val1"=>"9.9252", "val2"=>"78.1198", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"minor", "val7"=>"1561129", "val8"=>"1561129"),
            array("val0"=>"Jamshedpur", "val1"=>"22.7925", "val2"=>"86.1842", "val3"=>"India", "val4"=>"IN", "val5"=>"Jhārkhand", "val6"=>"", "val7"=>"1558000", "val8"=>"1558000"),
            array("val0"=>"Prayagraj", "val1"=>"25.4358", "val2"=>"81.8464", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"1536218", "val8"=>"1536218"),
            array("val0"=>"Nāsik", "val1"=>"19.9975", "val2"=>"73.7898", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"1486053", "val8"=>"1486053"),
            array("val0"=>"Farīdābād", "val1"=>"28.4211", "val2"=>"77.3078", "val3"=>"India", "val4"=>"IN", "val5"=>"Haryāna", "val6"=>"", "val7"=>"1414050", "val8"=>"1414050"),
            array("val0"=>"Meerut", "val1"=>"28.9800", "val2"=>"77.7100", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"1305429", "val8"=>"1305429"),
            array("val0"=>"Jabalpur", "val1"=>"23.1667", "val2"=>"79.9333", "val3"=>"India", "val4"=>"IN", "val5"=>"Madhya Pradesh", "val6"=>"", "val7"=>"1267564", "val8"=>"1267564"),
            array("val0"=>"Kalyān", "val1"=>"19.2502", "val2"=>"73.1602", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"1246381", "val8"=>"1246381"),
            array("val0"=>"Vasai-Virar", "val1"=>"19.3607", "val2"=>"72.7956", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"1221233", "val8"=>"1221233"),
            array("val0"=>"Najafgarh", "val1"=>"28.6092", "val2"=>"76.9798", "val3"=>"India", "val4"=>"IN", "val5"=>"Delhi", "val6"=>"", "val7"=>"1203180", "val8"=>"1203180"),
            array("val0"=>"Vārānasi", "val1"=>"25.3189", "val2"=>"83.0128", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"1198491", "val8"=>"1198491"),
            array("val0"=>"Srīnagar", "val1"=>"34.0900", "val2"=>"74.7900", "val3"=>"India", "val4"=>"IN", "val5"=>"Jammu and Kashmīr", "val6"=>"admin", "val7"=>"1180570", "val8"=>"1180570"),
            array("val0"=>"Aurangābād", "val1"=>"19.8800", "val2"=>"75.3200", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"1175116", "val8"=>"1175116"),
            array("val0"=>"Dhanbād", "val1"=>"23.7998", "val2"=>"86.4305", "val3"=>"India", "val4"=>"IN", "val5"=>"Jhārkhand", "val6"=>"", "val7"=>"1162472", "val8"=>"1162472"),
            array("val0"=>"Amritsar", "val1"=>"31.6400", "val2"=>"74.8600", "val3"=>"India", "val4"=>"IN", "val5"=>"Punjab", "val6"=>"", "val7"=>"1132383", "val8"=>"1132383"),
            array("val0"=>"Alīgarh", "val1"=>"27.8800", "val2"=>"78.0800", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"1131160", "val8"=>"1131160"),
            array("val0"=>"Guwāhāti", "val1"=>"26.1722", "val2"=>"91.7458", "val3"=>"India", "val4"=>"IN", "val5"=>"Assam", "val6"=>"", "val7"=>"1116267", "val8"=>"1116267"),
            array("val0"=>"Hāora", "val1"=>"22.5800", "val2"=>"88.3294", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"1077075", "val8"=>"1077075"),
            array("val0"=>"Rānchi", "val1"=>"23.3600", "val2"=>"85.3300", "val3"=>"India", "val4"=>"IN", "val5"=>"Jhārkhand", "val6"=>"admin", "val7"=>"1073440", "val8"=>"1073440"),
            array("val0"=>"Gwalior", "val1"=>"26.2124", "val2"=>"78.1772", "val3"=>"India", "val4"=>"IN", "val5"=>"Madhya Pradesh", "val6"=>"", "val7"=>"1069276", "val8"=>"1069276"),
            array("val0"=>"Chandīgarh", "val1"=>"30.7500", "val2"=>"76.7800", "val3"=>"India", "val4"=>"IN", "val5"=>"Chandīgarh", "val6"=>"admin", "val7"=>"1055450", "val8"=>"1055450"),
            array("val0"=>"Haldwāni", "val1"=>"29.2200", "val2"=>"79.5200", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttarākhand", "val6"=>"", "val7"=>"1050000", "val8"=>"1050000"),
            array("val0"=>"Vijayavāda", "val1"=>"16.5193", "val2"=>"80.6305", "val3"=>"India", "val4"=>"IN", "val5"=>"Andhra Pradesh", "val6"=>"", "val7"=>"1048240", "val8"=>"1048240"),
            array("val0"=>"Jodhpur", "val1"=>"26.2800", "val2"=>"73.0200", "val3"=>"India", "val4"=>"IN", "val5"=>"Rājasthān", "val6"=>"", "val7"=>"1033918", "val8"=>"1033918"),
            array("val0"=>"Raipur", "val1"=>"21.2444", "val2"=>"81.6306", "val3"=>"India", "val4"=>"IN", "val5"=>"Chhattīsgarh", "val6"=>"admin", "val7"=>"1010087", "val8"=>"1010087"),
            array("val0"=>"Kota", "val1"=>"25.1800", "val2"=>"75.8300", "val3"=>"India", "val4"=>"IN", "val5"=>"Rājasthān", "val6"=>"", "val7"=>"1001694", "val8"=>"1001694"),
            array("val0"=>"Bhayandar", "val1"=>"19.2900", "val2"=>"72.8500", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"809378", "val8"=>"809378"),
            array("val0"=>"Loni", "val1"=>"28.7500", "val2"=>"77.2800", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"516082", "val8"=>"516082"),
            array("val0"=>"Ambattūr", "val1"=>"13.1143", "val2"=>"80.1548", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"466205", "val8"=>"466205"),
            array("val0"=>"Salt Lake City", "val1"=>"22.6100", "val2"=>"88.4000", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"403316", "val8"=>"403316"),
            array("val0"=>"Bhātpāra", "val1"=>"22.8700", "val2"=>"88.4100", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"386019", "val8"=>"386019"),
            array("val0"=>"Kūkatpalli", "val1"=>"17.4849", "val2"=>"78.4138", "val3"=>"India", "val4"=>"IN", "val5"=>"Telangāna", "val6"=>"", "val7"=>"385821", "val8"=>"385821"),
            array("val0"=>"Dāsarhalli", "val1"=>"13.0465", "val2"=>"77.5130", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"349720", "val8"=>"349720"),
            array("val0"=>"Muzaffarpur", "val1"=>"26.1225", "val2"=>"85.3906", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"333200", "val8"=>"333200"),
            array("val0"=>"Oulgaret", "val1"=>"11.9570", "val2"=>"79.7737", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"300104", "val8"=>"300104"),
            array("val0"=>"New Delhi", "val1"=>"28.6139", "val2"=>"77.2089", "val3"=>"India", "val4"=>"IN", "val5"=>"Delhi", "val6"=>"primary", "val7"=>"249998", "val8"=>"249998"),
            array("val0"=>"Tiruvottiyūr", "val1"=>"13.1600", "val2"=>"80.3000", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"249446", "val8"=>"249446"),
            array("val0"=>"Puducherry", "val1"=>"11.9167", "val2"=>"79.8167", "val3"=>"India", "val4"=>"IN", "val5"=>"Puducherry", "val6"=>"admin", "val7"=>"244377", "val8"=>"244377"),
            array("val0"=>"Byatarayanpur", "val1"=>"13.0659", "val2"=>"77.5922", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"239902", "val8"=>"239902"),
            array("val0"=>"Pallāvaram", "val1"=>"12.9675", "val2"=>"80.1491", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"215417", "val8"=>"215417"),
            array("val0"=>"Secunderābād", "val1"=>"17.4399", "val2"=>"78.4983", "val3"=>"India", "val4"=>"IN", "val5"=>"Telangāna", "val6"=>"", "val7"=>"213698", "val8"=>"213698"),
            array("val0"=>"Shimla", "val1"=>"31.1033", "val2"=>"77.1722", "val3"=>"India", "val4"=>"IN", "val5"=>"Himāchal Pradesh", "val6"=>"admin", "val7"=>"206575", "val8"=>"206575"),
            array("val0"=>"Puri", "val1"=>"19.8000", "val2"=>"85.8167", "val3"=>"India", "val4"=>"IN", "val5"=>"Odisha", "val6"=>"", "val7"=>"201026", "val8"=>"201026"),
            array("val0"=>"Murtazābād", "val1"=>"28.7111", "val2"=>"77.2688", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"189117", "val8"=>"189117"),
            array("val0"=>"Shrīrāmpur", "val1"=>"22.7500", "val2"=>"88.3400", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"181842", "val8"=>"181842"),
            array("val0"=>"Chandannagar", "val1"=>"22.8700", "val2"=>"88.3800", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"166867", "val8"=>"166867"),
            array("val0"=>"Sultānpur Mazra", "val1"=>"28.6981", "val2"=>"77.0689", "val3"=>"India", "val4"=>"IN", "val5"=>"Delhi", "val6"=>"", "val7"=>"163716", "val8"=>"163716"),
            array("val0"=>"Krishnanagar", "val1"=>"23.4000", "val2"=>"88.5000", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"153062", "val8"=>"153062"),
            array("val0"=>"Bārākpur", "val1"=>"22.7600", "val2"=>"88.3700", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"152783", "val8"=>"152783"),
            array("val0"=>"Bhālswa Jahangirpur", "val1"=>"28.7354", "val2"=>"77.1638", "val3"=>"India", "val4"=>"IN", "val5"=>"Delhi", "val6"=>"", "val7"=>"151427", "val8"=>"151427"),
            array("val0"=>"Nāngloi Jāt", "val1"=>"28.6833", "val2"=>"77.0667", "val3"=>"India", "val4"=>"IN", "val5"=>"Delhi", "val6"=>"", "val7"=>"150371", "val8"=>"150371"),
            array("val0"=>"Balasore", "val1"=>"21.5033", "val2"=>"86.9250", "val3"=>"India", "val4"=>"IN", "val5"=>"Odisha", "val6"=>"", "val7"=>"144373", "val8"=>"144373"),
            array("val0"=>"Dalūpura", "val1"=>"28.6004", "val2"=>"77.3194", "val3"=>"India", "val4"=>"IN", "val5"=>"Delhi", "val6"=>"", "val7"=>"132628", "val8"=>"132628"),
            array("val0"=>"Yelahanka", "val1"=>"13.1007", "val2"=>"77.5963", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"119891", "val8"=>"119891"),
            array("val0"=>"Titāgarh", "val1"=>"22.7400", "val2"=>"88.3700", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"116541", "val8"=>"116541"),
            array("val0"=>"Dam Dam", "val1"=>"22.6200", "val2"=>"88.4200", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"114786", "val8"=>"114786"),
            array("val0"=>"Bānsbāria", "val1"=>"22.9700", "val2"=>"88.4000", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"103920", "val8"=>"103920"),
            array("val0"=>"Madhavaram", "val1"=>"13.1482", "val2"=>"80.2314", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"100442", "val8"=>"100442"),
            array("val0"=>"Abbigeri", "val1"=>"13.0767", "val2"=>"77.5250", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"100000", "val8"=>"100000"),
            array("val0"=>"Baj Baj", "val1"=>"22.4828", "val2"=>"88.1818", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"76837", "val8"=>"76837"),
            array("val0"=>"Garhi", "val1"=>"28.6317", "val2"=>"77.3186", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"75544", "val8"=>"75544"),
            array("val0"=>"Mīrpeta", "val1"=>"17.3200", "val2"=>"78.5200", "val3"=>"India", "val4"=>"IN", "val5"=>"Telangāna", "val6"=>"", "val7"=>"66982", "val8"=>"66982"),
            array("val0"=>"Nerkunram", "val1"=>"13.0619", "val2"=>"80.2094", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"52570", "val8"=>"52570"),
            array("val0"=>"Kendrāparha", "val1"=>"20.5000", "val2"=>"86.4200", "val3"=>"India", "val4"=>"IN", "val5"=>"Odisha", "val6"=>"", "val7"=>"41404", "val8"=>"41404"),
            array("val0"=>"Sijua", "val1"=>"23.7762", "val2"=>"86.3303", "val3"=>"India", "val4"=>"IN", "val5"=>"Jhārkhand", "val6"=>"", "val7"=>"39372", "val8"=>"39372"),
            array("val0"=>"Manali", "val1"=>"13.1667", "val2"=>"80.2667", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"37748", "val8"=>"37748"),
            array("val0"=>"Kānkuria", "val1"=>"24.6523", "val2"=>"87.9604", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"36925", "val8"=>"36925"),
            array("val0"=>"Chakapara", "val1"=>"22.6300", "val2"=>"88.3500", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"35282", "val8"=>"35282"),
            array("val0"=>"Pāppākurichchi", "val1"=>"10.8137", "val2"=>"78.7481", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"26889", "val8"=>"26889"),
            array("val0"=>"Herohalli", "val1"=>"12.9911", "val2"=>"77.4873", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"23851", "val8"=>"23851"),
            array("val0"=>"Madipakkam", "val1"=>"12.9623", "val2"=>"80.1986", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"20523", "val8"=>"20523"),
            array("val0"=>"Sabalpur", "val1"=>"25.6053", "val2"=>"85.1835", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"18810", "val8"=>"18810"),
            array("val0"=>"Bāuria", "val1"=>"22.4521", "val2"=>"88.1853", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"16764", "val8"=>"16764"),
            array("val0"=>"Salua", "val1"=>"22.6100", "val2"=>"88.2700", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"15171", "val8"=>"15171"),
            array("val0"=>"Chik Bānavar", "val1"=>"13.0846", "val2"=>"77.5014", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"14409", "val8"=>"14409"),
            array("val0"=>"Jālhalli", "val1"=>"13.0333", "val2"=>"77.5500", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"13063", "val8"=>"13063"),
            array("val0"=>"Chinnasekkadu", "val1"=>"13.1609", "val2"=>"80.2573", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"12854", "val8"=>"12854"),
            array("val0"=>"Jethuli", "val1"=>"25.5378", "val2"=>"85.2841", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"11572", "val8"=>"11572"),
            array("val0"=>"Nagtala", "val1"=>"22.4667", "val2"=>"88.3833", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"10419", "val8"=>"10419"),
            array("val0"=>"Pakri", "val1"=>"25.5876", "val2"=>"85.1580", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"9768", "val8"=>"9768"),
            array("val0"=>"Hunasamaranhalli", "val1"=>"13.1435", "val2"=>"77.6200", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"9741", "val8"=>"9741"),
            array("val0"=>"Hesarghatta", "val1"=>"13.1391", "val2"=>"77.4783", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"9485", "val8"=>"9485"),
            array("val0"=>"Bommayapālaiyam", "val1"=>"11.9922", "val2"=>"79.8499", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"8796", "val8"=>"8796"),
            array("val0"=>"Gundūr", "val1"=>"10.7339", "val2"=>"78.7184", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"8587", "val8"=>"8587"),
            array("val0"=>"Punādih", "val1"=>"25.5484", "val2"=>"85.2649", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"8273", "val8"=>"8273"),
            array("val0"=>"Harilādih", "val1"=>"23.7333", "val2"=>"86.4000", "val3"=>"India", "val4"=>"IN", "val5"=>"Jhārkhand", "val6"=>"", "val7"=>"7917", "val8"=>"7917"),
            array("val0"=>"Alāwalpur", "val1"=>"25.4958", "val2"=>"85.2021", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"7827", "val8"=>"7827"),
            array("val0"=>"Mādnāikanhalli", "val1"=>"13.0626", "val2"=>"77.4642", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"7805", "val8"=>"7805"),
            array("val0"=>"Bāgalūr", "val1"=>"13.1330", "val2"=>"77.6660", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"7519", "val8"=>"7519"),
            array("val0"=>"Kādiganahalli", "val1"=>"13.1687", "val2"=>"77.6283", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"7225", "val8"=>"7225"),
            array("val0"=>"Khānpur Zabti", "val1"=>"28.7103", "val2"=>"77.2781", "val3"=>"India", "val4"=>"IN", "val5"=>"Uttar Pradesh", "val6"=>"", "val7"=>"6994", "val8"=>"6994"),
            array("val0"=>"Mahuli", "val1"=>"25.5430", "val2"=>"85.2268", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"6683", "val8"=>"6683"),
            array("val0"=>"Zeyādah Kot", "val1"=>"22.4445", "val2"=>"88.3345", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"6457", "val8"=>"6457"),
            array("val0"=>"Arshakunti", "val1"=>"13.0785", "val2"=>"77.4225", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"6262", "val8"=>"6262"),
            array("val0"=>"Mirchi", "val1"=>"25.5554", "val2"=>"85.2139", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"5710", "val8"=>"5710"),
            array("val0"=>"Sonudih", "val1"=>"25.1155", "val2"=>"87.0214", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"5658", "val8"=>"5658"),
            array("val0"=>"Bayandhalli", "val1"=>"12.9779", "val2"=>"77.5688", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"5118", "val8"=>"5118"),
            array("val0"=>"Sondekoppa", "val1"=>"13.0000", "val2"=>"77.3667", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"4866", "val8"=>"4866"),
            array("val0"=>"Babura", "val1"=>"25.0851", "val2"=>"87.1092", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"4755", "val8"=>"4755"),
            array("val0"=>"Mādavar", "val1"=>"13.0525", "val2"=>"77.4732", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"4678", "val8"=>"4678"),
            array("val0"=>"Kadabgeri", "val1"=>"12.9965", "val2"=>"77.4331", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"4573", "val8"=>"4573"),
            array("val0"=>"Nanmangalam", "val1"=>"12.9381", "val2"=>"80.1753", "val3"=>"India", "val4"=>"IN", "val5"=>"Tamil Nādu", "val6"=>"", "val7"=>"4386", "val8"=>"4386"),
            array("val0"=>"Taliganja", "val1"=>"22.5041", "val2"=>"88.3598", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"4278", "val8"=>"4278"),
            array("val0"=>"Tarchha", "val1"=>"25.1116", "val2"=>"87.0964", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"4198", "val8"=>"4198"),
            array("val0"=>"Belgharia", "val1"=>"22.6581", "val2"=>"88.3852", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"4193", "val8"=>"4193"),
            array("val0"=>"Kammanhalli", "val1"=>"13.0155", "val2"=>"77.6381", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"4144", "val8"=>"4144"),
            array("val0"=>"Ambāpuram", "val1"=>"16.5990", "val2"=>"80.8938", "val3"=>"India", "val4"=>"IN", "val5"=>"Andhra Pradesh", "val6"=>"", "val7"=>"4110", "val8"=>"4110"),
            array("val0"=>"Sonnappanhalli", "val1"=>"13.1557", "val2"=>"77.6179", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"3996", "val8"=>"3996"),
            array("val0"=>"Kedihāti", "val1"=>"22.6508", "val2"=>"88.4608", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"3910", "val8"=>"3910"),
            array("val0"=>"Doddajīvanhalli", "val1"=>"13.0086", "val2"=>"77.6143", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"3792", "val8"=>"3792"),
            array("val0"=>"Simli Murārpur", "val1"=>"25.5792", "val2"=>"85.2401", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"3739", "val8"=>"3739"),
            array("val0"=>"Sonāwān", "val1"=>"25.5445", "val2"=>"85.2387", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"3682", "val8"=>"3682"),
            array("val0"=>"Devanandapur", "val1"=>"22.9326", "val2"=>"88.3729", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"3449", "val8"=>"3449"),
            array("val0"=>"Tribeni", "val1"=>"22.9867", "val2"=>"88.3987", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"3305", "val8"=>"3305"),
            array("val0"=>"Huttanhalli", "val1"=>"13.1651", "val2"=>"77.6512", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"3240", "val8"=>"3240"),
            array("val0"=>"Nathupur", "val1"=>"25.5163", "val2"=>"85.2544", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"3129", "val8"=>"3129"),
            array("val0"=>"Bāli", "val1"=>"25.4810", "val2"=>"85.2227", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"3128", "val8"=>"3128"),
            array("val0"=>"Vājarhalli", "val1"=>"13.1022", "val2"=>"77.4111", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"3009", "val8"=>"3009"),
            array("val0"=>"Alija Kotla", "val1"=>"17.2333", "val2"=>"78.5500", "val3"=>"India", "val4"=>"IN", "val5"=>"Telangāna", "val6"=>"", "val7"=>"3000", "val8"=>"3000"),
            array("val0"=>"Saino", "val1"=>"25.1134", "val2"=>"87.0108", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"2987", "val8"=>"2987"),
            array("val0"=>"Shekhpura", "val1"=>"25.5725", "val2"=>"85.1428", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"2950", "val8"=>"2950"),
            array("val0"=>"Cāchohalli", "val1"=>"13.0010", "val2"=>"77.4717", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"2946", "val8"=>"2946"),
            array("val0"=>"Andheri", "val1"=>"19.2104", "val2"=>"73.0464", "val3"=>"India", "val4"=>"IN", "val5"=>"Mahārāshtra", "val6"=>"", "val7"=>"2937", "val8"=>"2937"),
            array("val0"=>"Nārāyanpur Kola", "val1"=>"25.1293", "val2"=>"87.0076", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"2919", "val8"=>"2919"),
            array("val0"=>"Gyan Chak", "val1"=>"25.5496", "val2"=>"85.2423", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"2855", "val8"=>"2855"),
            array("val0"=>"Kasgatpur", "val1"=>"13.1101", "val2"=>"77.5045", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"2852", "val8"=>"2852"),
            array("val0"=>"Kitanelli", "val1"=>"13.0095", "val2"=>"77.4191", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"2827", "val8"=>"2827"),
            array("val0"=>"Harchandi", "val1"=>"25.1000", "val2"=>"87.0442", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"2827", "val8"=>"2827"),
            array("val0"=>"Santoshpur", "val1"=>"22.4650", "val2"=>"88.2193", "val3"=>"India", "val4"=>"IN", "val5"=>"West Bengal", "val6"=>"", "val7"=>"2808", "val8"=>"2808"),
            array("val0"=>"Bendravādi", "val1"=>"12.3636", "val2"=>"76.9137", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"2684", "val8"=>"2684"),
            array("val0"=>"Kodagihalli", "val1"=>"12.9771", "val2"=>"77.4651", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"2585", "val8"=>"2585"),
            array("val0"=>"Harna Buzurg", "val1"=>"25.0981", "val2"=>"87.0148", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"2579", "val8"=>"2579"),
            array("val0"=>"Mailanhalli", "val1"=>"13.1863", "val2"=>"77.6963", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"2543", "val8"=>"2543"),
            array("val0"=>"Sultānpur", "val1"=>"25.5248", "val2"=>"85.2507", "val3"=>"India", "val4"=>"IN", "val5"=>"Bihār", "val6"=>"", "val7"=>"2473", "val8"=>"2473"),
            array("val0"=>"Adakimāranhalli", "val1"=>"13.0633", "val2"=>"77.4417", "val3"=>"India", "val4"=>"IN", "val5"=>"Karnātaka", "val6"=>"", "val7"=>"2453", "val8"=>"2453")
        );

        $arrayByState = array();

        foreach ($array as $index => $entry){

            if($index === 0)continue;
            $state = $entry["val5"];
            $citydata = array(
                "cityname"=>$entry["val0"],
                "lat"=>$entry["val1"],
                "long"=>$entry["val2"],
                "ios2" =>$entry["val4"],
                "country" => $entry["val3"],
                "state"=>$state,
                "pincode"=>$entry["val7"],
                "population"=>$entry["val8"]
            );

            // if(!isset($arrayByState[$state])){
            //     $arrayByState[$state] = array();
            // }

            $arrayByState[$state][] = $citydata;
        }

            echo ("<pre>");
            print_r($arrayByState);


        // foreach($array as $obj){
        //     $new[ $objval5 ][] = $obj->val0;
        // };
        // print_r($new);




        // $row_count = count($array);
        // $col_count = count($array[0]);
        // $Bihar = [];

        // for ($i= 0; $i < $row_count+1; $i++){
        //     for ($j= 0; $j < $col_count+1; $j++){
        //         if($array[$i]["val5"] === "Bihar"){
                   
        //             $Bihar[] = $array[$i]["val0"];
        //         }
        //     }
           
        // };
        // print_r($Bihar);

    ?>
</body>
</html>
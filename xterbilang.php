<?php
    function xtoword($number) 
    {
        $number = abs($number);
        $angka = array(
            "nol", 
            "satu", 
            "dua", 
            "tiga", 
            "empat", 
            "lima",
            "enam", 
            "tujuh", 
            "delapan",
            "sembilan", 
            "sepuluh", 
            "sebelas"
        );

        $temp = "";

        if ($number < 12)
        {
            $temp = " ". $angka[$number];
        } 
        else if ($number < 20) 
        {
            $temp = xtoword($number - 10). " belas";
        } 
        else if ($number < 100) 
        {
            $temp = xtoword($number / 10)." puluh". xtoword($number % 10);
        } 
        else if ($number < 200) 
        {
            $temp = " seratus" . xtoword($number - 100);
        } 
        else if ($number < 1000) 
        {
            $temp = xtoword($number / 100) . " ratus" . xtoword($number % 100);
        } 
        else if ($number < 2000) 
        {
            $temp = " seribu" . xtoword($number - 1000);
        } 
        else if ($number < 1000000) 
        {
            $temp = xtoword($number / 1000) . " ribu" . xtoword($number % 1000);
        } 
        else if ($number < 1000000000) 
        {
            $temp = xtoword($number / 1000000) . " juta" . xtoword($number % 1000000);
        } 
        else if ($number < 1000000000000) 
        {
            $temp = xtoword($number / 1000000000) . " milyar" . xtoword(fmod($number,1000000000));
        } 
        else if ($number < 1000000000000000) 
        {
            $temp = xtoword($number / 1000000000000) . " trilyun" . xtoword(fmod($number,1000000000000));
        } 
        // else if($number < 1000000000000000000)
        // {
        //     $temp = "Tidak bisa disebutkan, angkanya sekitar (trillion / dwiyar)";
        // } 
        // else if($number < 10000000000000000000000)
        // {
        //     $temp = "Tidak bisa disebutkan, angkanya sekitar (quardrillion / tirta)";
        // }
        // else if($number < 1000000000000000000000000000)
        // {
        //     $temp = "Tidak bisa di sebutkan, angkanya sekitar (quantillion / triyar)";
        // }
        // else if($number < 10000000000000000000000000)
        // else if($number < 1000000000000000000000000000)
        // {
        //     $temp = "Tidak bisa di sebutkan, angkanya sekitar (sextillion / caturta)";
        // }
        // else if($number < 100000000000000000000000000000)
        // {
        //     $temp = "Tidak bisa di sebutkan, angkanya sekitar (septillion / caturyar)";
        // }
        // else if($number < 1000000000000000000000000000000000)
        // {
        //     $temp = "Tidak bisa di sebutkan, angkanya sekitar (octillion / pancata)";
        // }
        // else if($number < 10000000000000000000000000000000000000)
        // {
        //     $temp = "Tidak bisa di sebutkan, angkanya sekitar (nonillion / pancayar)";
        // }
        
        return $temp;
    }
     
     
    function numbertoword($number, $style=4) 
    {
        if($number<0) 
        {
            $result = "minus ". trim(xtoword($number));
        } 
        else 
        {
            $result = trim(xtoword($number));
        }

        switch ($style) 
        {
            case 1:
                $result = strtoupper($result);
                break;
        
            case 2:
                $result = strtolower($result);
                break;
        
            case 3:
                $result = ucwords($result);
                break;
        
            default:
                $result = ucfirst($result);
                break;
        }     
        
        return $result;
    }
?>

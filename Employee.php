<?php
class Employee
{
    private $name;
    private $hoursWorked;
    private $hourlyRate;
    private $tax;
    private $grossPay;
    private $netPay;

    function __construct($name, $hoursWorked, $hourlyRate)
    {
        $this->name = $name;
        $this->hoursWorked = $hoursWorked;
        $this->hourlyRate = $hourlyRate;
    }

    function getName()
    {
        return $this->name;
    }
    //tạo method get các field để đảm bảo tính đóng gói //
    function getHoursWorked() {
        return $this->hoursWorked;
    }

    function getHourlyRate() {
        return $this->hourlyRate;
    }
    function getTax() {
        return $this->tax;
    }

    function getGrossPay() {
        return $this->grossPay;
    }

    function getNetPay() {
        return $this->netPay;
    }

    function calculatePay()
    {
        //Tạo 1 biến tính toán lại hệ số giờ cho nhân viên theo phúc lợi của công ty
        $payableHours = 0;
        if ($this->hoursWorked <= 40) {
            //Giữ nguyên nếu giờ làm việc <= 40
            $payableHours = $this->hoursWorked;
        } else {
            //Số giờ từ 41 trở đi được x1.5 lần
            $payableHours = 40 + ($this->hoursWorked - 40) * 3 / 2;
        }
        //Tính lương gộp
        $this->grossPay = $payableHours * $this->hourlyRate;

        //Tính thuế

        if ($this->grossPay > 200) {
            $this->tax = ($this->grossPay - 200) * 0.2;
        }
        else {
            $this->tax = 0;
        }

        //Tính lương ròng cho nhân viên
        $this->netPay = $this->grossPay - $this->tax;
    }


    



}

    

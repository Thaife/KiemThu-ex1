<?php
class Employee
{
    private $name;
    private $hoursWorked;
    private $hourlyRate;
    private $tax;
    private $grossPay;
    private $netPay;

    public function __construct($name, $hoursWorked, $hourlyRate)
    {
        $this->name = $name;
        $this->hoursWorked = $hoursWorked;
        $this->hourlyRate = $hourlyRate;
    }

    public function getName()
    {
        return $this->name;
    }
    

    public function calculatePay()
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
        //Tính lương gộp (Sử dụng sai hệ số giờ trong tính lương)
        $this->grossPay = $this->hoursWorked * $this->hourlyRate;

        //Tính thuế 20%, nếu lương > 200
        if ($this->grossPay >= 200) {
            $this->tax = $this->grossPay * 20/100;
        }



        //Tính lương ròng cho nhân viên
        $this->netPay = $this->grossPay - $this->tax;
    }
}

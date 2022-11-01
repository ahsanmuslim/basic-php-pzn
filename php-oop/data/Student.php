<?php 

class Student 
{
    public int $id;
    public string $name;
    public string $kelas;
    private string $nilai;

    public function setNilai(int $nilai):void 
    {
        $this->nilai = $nilai;
    }

    public function __clone()
    {
        unset ($this->nilai);
    }

    public function __toString():string
    {
        return "Student id: $this->id, name: $this->name, kelas: $this->kelas";
    }

    public function __invoke(...$arg):void
    {
        $join = join(",", $arg);
        echo "Invoke student with argument $join" . PHP_EOL;
    }

    public function __debugInfo():array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "kelas" => $this->kelas,
            "author" => "Ahmad Susanto",
            "tahun" => 2022
        ];
    }

}
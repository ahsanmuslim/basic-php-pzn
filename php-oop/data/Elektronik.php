<?php 

//kalau buat namespace dalam 1 file maka harus dengan blok {} jika tidak maka semua akan dengan namespace yang sama
namespace Data\Satu {
    class Elektronik {
        var string $name = "Handphone";
    }
    
    class Pakaian {
        var string $name = "Baju dalam";
    }
    
    class Furniture {
        var string $name = "Meja Kantor";
    }
}

namespace Data\Dua {
    class Elektronik {
        var string $name = "Laptop";
    }
}
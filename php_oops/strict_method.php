<?php
    class person{
        public static string $name = "Deepesh";
        public static function greeting():void{
            echo "Hello ".self::$name;
        }
    }
    person::greeting();
?>
<script>
    class mastertclass{
        static add(a,b){
            return a + b;
        }
    }
    const utils = new mastertclass();
    console.log(mastertclass.add(10,30))
    console.log(utils.add)// undefined
</script>
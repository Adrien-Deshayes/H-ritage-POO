require_once 'Vehicle.php';

$truck = new Truck(10,"bleu",3,"diesel");
echo $truck->forward();
echo $truck->brake();
echo $truck->inFilling();
echo "\n";
var_dump($truck);

<?php

// phpinfo();

require __DIR__ . '/../vendor/autoload.php';

// require_once 'Transaction.php';

// // spl_autoload_register(function ($class) {
// //     $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class) . '.php');
// //     echo $path;
// //     var_dump($class);
// //     require $path;
// // });



// // Need to look more into this
// // Forgot to require the class
// // -> is basaclly . in javascript object

// require_once '../app/Paddle/CustomerProfile.php';

// use Notification\CustomerProfile as CProfile;

// // We can use "as" and set a name after
// var_dump(new CProfile());

// // $transaction = (new Transaction(100, 'Transaction 1'))
// //     ->addTax(8)
// //     ->applyDiscount(10);

// // chainning methos
// $transaction1 = (new Transaction(100, 'Transaction 1'))
//     ->addTax(8)
//     ->applyDiscount(10);
// // ->getAmount();

// // $transaction2 = (new Transaction(200, 'Transaction 1'))
// //     ->addTax(8)
// //     ->applyDiscount(15);
// // ->getAmount();

// // access to the properties
// // $transaction->addTax(8);
// // $transaction->applyDiscount(10);
// // $transaction->addTax(8)->applyDiscount(10);

// // var_dump($transaction->getAmount());
// // var_dump($transaction1->getAmount(), $transaction2->getAmount());

// // var_dump($transaction1);

// $str = '{"a":1, "b":2, "c":3}';

// $obj = json_decode($str);

// // var_dump($obj);
// var_dump($obj->a);
// echo '<br />';
// var_dump($obj->b);
// echo '<br />';
// var_dump($obj->c);

// $arr = [1, 2, 3];

// $obj1 = (object)$arr;
// echo '<br />';
// var_dump($obj1);
// echo '<br />';
// var_dump($obj1->{1});


// require './user.php';

// require '../app/Static_L/static_learn.php';

// // use Basic\Profile\User;
// use App\Static_L\Static_Learn;

// $newLearn = new Static_Learn();
// $newLearn1 = new Static_Learn();
// $newLearn2 = new Static_Learn();

// // var_dump(Static_Learn::$count);
// var_dump(Static_Learn::getCount());
// use App\Enums\Status;
// // $user = new User();
// // echo User::STATUS_PAID;
// // echo '<br />';
// // echo $user::STATUS_PENDING;
// // echo '<br />';
// // echo User::class;
// // $user->setStatus(Status::DECLINE);
// var_dump($user);
// var_dump(new User());
// require '../app/Transaction_2.php';

// use App\Transaction_2\Transaction;

// $transaction = new Transaction(25);

// // $transaction->setAmount(125);

// $transaction->process();

// require '../app/Toaster.php';
// require '../app/Toaster_Pro.php';

// use App\Toaster;
// use App\ToasterPro;

// $toaster = new Toaster();
// $toasterpro = new ToasterPro();

// // $toaster->addSlice('bread');
// // $toaster->toast();

// $toasterpro->addSlice('Bread');
// $toasterpro->addSlice('bread');
// $toasterpro->addSlice('bread');
// $toasterpro->toastBagle('somebeagle');
// $toasterpro->toast();


// require '../app/Abstraction/Text.php';
// require '../app/Abstraction/Checkbox.php';
// require '../app/Abstraction/Radio.php';



// use App\Abstraction\Checkbox;
// use App\Abstraction\Radio;
// use App\Abstraction\Text;

// $fields = [

//     new Text('textField'),
//     new Checkbox('checkboxField'),
//     new Radio('radioField'),
// ];

// foreach ($fields as $field) {
//     # code...
//     echo $field->render() . '<br />';
// }

// require '../app/Interfaces/CollectionAgency.php';
// $collector = new App\Interfaces\CollectionAgency();


// echo $collector->collect(100);

require '../app/DebtCollectionService.php';
require '../app/Interfaces/DebtCollector.php';
$service = new \App\DebtCollectionService();

$service->collectDebt(new \App\Interfaces\DebtCollector());

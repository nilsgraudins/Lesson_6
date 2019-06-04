<?php
// PHP GENERE HTML KODU !!!!!!
// ja lapaa ir tikai php, tad aizveroso tagu var nelikt.
// Liek tikai tad, ja raksta ari html. Laba prakse ir nelikt aizveroso tagu.
// PSR 2 standarts rakstisanai

$someInt = 123; // int
echo $someInt;
$someFloat = 3.14; // float
$someText = 'Foo'; //string. Var gan vienpedinas, gan divpedinas. Labak vienpedinas.
// var sadalit tekstu vairakas rindas, bet HTML ignore Enter.
$someTrue = false; // bool
$someNothing = null; // null
$someNothing2; // null. Mainigais bez vertibas ir null. Parasti taa nedara.

define("PI", 3.14); // konstates mainigais. Definee ar lielajiem burtiem. Bez $.
echo PI;// ari izvada ar lielajiem burtiem bez $
echo defined("PI");// atrod jau definetu mainigo

$cars = ['gaz', 'zaz', 'uaz', 'maz', 'vaz', 'bmw'];
echo $cars[4];

$person = [
    'firstName' => 'John', // => masiva elementu pieskirsana. 
    'lastName' => 'Doe', // pirmais ir KEY, otrais ir vertiba. => ir pieskirsana. Tas ir tikai masivam.
    'age' => '54',
];
echo $person['lastName'];

$people = [
    1 => [ // saja gadijuma varam pasi indekset numuru. Vairs nav 0, bet ir 1. Var but ari Stirng ka indekss.
        'firstName' => 'John', //sanak nomainit masiva numuru.
        'lastName' => 'Doe',
        'age' => '54',
    ],
    2 => [ // var but kaut vai 'Jenny'
        'firstName' => 'Jane',
        'lastName' => 'Doe',
        'age' => '23',
    ],
];
echo $people[1]['firstName']; // bus Jane, tas ir 1.masiva elements. Pec MANAS indeksacijas ir jau John.

echo '<pre>';
var_dump($people); // var_dump parada visu info par kadu mainigo. <pre> pirms tam sakarto skaisti.

// +
// -
// /
// *
// %
// . - Konkatinacija (savienosana)

// === tapat ka JavaScript
// !== tapat ka JavaScript

// && - un
// || - vai
// visiem mainigajiem nak klat $!!!!!!!

if (true) {
    // code
} else if (false) {
    // code
} else {
    // code
} # var komentet ari ar 'hashtag'

$foo = 'bar';
switch ($foo) {
    case 'foo':
        # code...
        break;
    case 'bar':
        # code...
        break;
    case 'baz':
        # code...
        break;
    default:
        # code..
        break;
}

// while (true) {
//     # code
// };

// do {
//     # code
// } while (false); // izpildas vismaz vienu reizi

for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
};

$cars = ['a' => 'gaza', 'b' => 'zaza', 'uaza', 'maza', 'vaza', 'bmwa']; //Var ari mainit KEY.
 // so visvairak izmanto WEB PHP, jo jaiet cauri masiva elementiem
foreach ($cars as $k => $att) {// pirms bultinas ir KEY, pec bultinas ir vertiba. 
    echo $k . ' => ' . $att . '<br>';// key un vertiba var but jebkuri.

};
/**a => gaza
   b => zaza
   0 => uaza
   1 => maza
   2 => vaza
   3 => bmwa
*/
echo '' . 1 . '<br>'; // sis parada vienkarsi 1 kaa string
var_dump('' . 1); // sis parada visu info --string(1) "1"--Strada ari JavaScript, tikai ar +
var_dump((string)1); // ari tas pats, tikai jaunaks variants
var_dump((int)1.12); // norauj komatu, paliek int. Maina datu tipu...

// https://secure.php.net/ tiek mekleta visa informacija par PHP funkcijam

$number = [1,2,3,4,5];
var_dump(in_array(3, $number)); // mekle, vai 3 ir dotaja masivaa. Atbilde ir TRUE.

var_dump(in_array('3', $number, true)); // bus jau FALSE, jo true iekavas nozime Strict Compare (ari datu tips)

// Nedrikst atstat nekadus error, Notice, Warning, Error, Fatal error

// Funkcija domata, lai samazinatu koda daudzumu. Atkartojamu gabalu liek kaa funkciju.

function addTwoNumbers($num1, $num2): int // ar so var definet mainiga tipu, kuru funkcija atgriez,
                            // vai ari katram mainigajam uzreiz pieliek ievades tipu.
                            // figuriekavas liek zem funkcijas. Var likt uzreiz ari defaltaas vertibas
                            // uzreiz iekavaas. ($num1, $num2, $num3 = 12)
{
    return $num1 + $num2; // viss, kas ir aiz RETURN, netiek izpildits
}
echo addTwoNumbers(1, 3) . '<br>';

function checkPalindrome (string $word): bool
{
    return str_replace(' ', '', strtolower($word)) == str_replace(' ', '', strtolower(strrev($word)));// viena rinda
//    $withOutSpaces = str_replace(' ', '', $word);
//    $wordInLower = strtolower($withOutSpaces);
//    return $wordInLower == strrev($wordInLower);     atseviski
}
echo checkPalindrome('Anna') . '<br>';
var_dump(checkPalindrome('Eva can I see bees in a cave')) . '<br>';
var_dump(checkPalindrome('Annab')) . '<br>';

abstract class Animal // abstrakta klase ir tada, kurai nevar uztaistit jaunu objektu
                    // saja gadijuma Puka to dara. Abstrakta klase ir domata, lai no vinas taisitu bernu klases,
                    // nevis pa taisno ojektus.
{
    private $name; // private ir tikai klases iekspuse
    protected $energy = 10;

    public static $animalCount = 0; // statiskam mainigajam nevajag konkretu objektu.
                                    // citiem vardiem, vins nepieder konkretam objektam.

    public function __construct(string $name) // konstruktors ir publiska funkcija. Sis ir obligats nosaukums.
    {
        $this->name = $name;// this name ir tas private name augsaa. Un $name ir tas pats,kas ir konstruktoraa.
        self::$animalCount++; // statiskam mainigajam nav objekta, tapec nav $this, bet ir self::
                            // un -> klust par ::
    }

    public function run() // public var izsaukt no arpuses
    {
        $this->energy--; // masiviem ir =>, objektiem ir ->
        // this.energy--  butu JavaScriptaa. This nozimee, ka iet runa par konkreto objektu.
    }
    public function sleep()
    {
        $this->energy++;
    }
}

class Cat extends Animal implements Purrable// manto visu no Animal klases un izmanto Purrable interfeisu
{
    public function run()
    {
        $this->energy -= 2; // energy ir private ipasiba Animal klase, tapec var taisit jaunu Energy
                        // Cat klasee, vai ari Animal klase Energy parverst par Protected. Pie protected tiek 
                        // klat ari visas bernu klases
        
    }
    public function purr()
    {
        echo 'is purring'; // so var izsaukt tikai Murim, jo PUka ir no Animal klases
    }
}

class Lion implements Purrable
{
    public function purr()
    {
        echo 'Lion is purring';
    }
}

class Dog
{

}

interface Purrable
// interface ir kaa kontakts. Standartizets savienojums vadiem, ko visas daksas var lietot.
{
    public function purr();
}

echo '<pre>'; // lauj izmantot new line.
$muris = new Cat('Muris'); // ja nav konstruktora, vai nav parametra konstruktoraa, tad iekavas var 
                                // nelikt, vai neko nerakstiit.
$muris->run();
$muris->run();
$muris->run();
$muris->run();
$muris->purr();
var_dump($muris);
var_dump(Animal::$animalCount); // tie koli attiecas uz $animalCount

$puka = new Cat('Puka'); // no Animal parsauc par Cat, un tagad strada
$puka->sleep();
$puka->sleep();
$puka->sleep();
$puka->sleep();

var_dump($puka); // var_dump izdruka mainigaa informaciju. Gatavaa kodaa nepaliek var_dump (nedrikst)

var_dump(Animal::$animalCount); // seit jau ir divi, jo ir PUka un Muris

$lion = new Lion;
$dog = new Dog;

function makeSound(Purrable $animal) // pieliek metodei interfeisu
{
    $animal->purr();
}

makeSound($muris);
//makeSound($dog); //IDE(integrated development environment) pati blaustas, ka $dog nav pievienots interfeiss.
                // taa var labak atrast kludas kodaa.


// Piemers par realo dzivi.....

class User
{
    public $id;
    public $firstName;
    public $lastName;
    public $email;
}

class UserRepository implements Savable
{
    public static function save(User $user)// statiska funkcija, lai nevajadzetu taisit klases objektu
    {
        // DB::query("INSERT INTO users SET id = ?, firstName.....");
    }
}

interface Savable
{
    public static function save(); // ar interfeisu pasaka, ka taja klasee, kas implemente so interfeisu,
                                    // obligati jabut funkcijai save()
}

$user = new User;
$user->id = 10;
$user->firstName = 'John';
$user->lastName = 'Doe';
$user->email = 'john@doe.com';
UserRepository::save($user);
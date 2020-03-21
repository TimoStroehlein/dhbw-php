# Variablen und Konstanten

## Variablen

Beginnen mit $

Datentyp wird nicht explizit angegeben, definiert sich vom Wert

Konstanten beginnen NICHT mit $

```php
const g = 9.81;
```

Referenzen auf bereits definierte Variablen

```php
$master = 3;
$slave = &$master;
$master = 5;
```

### Funktionen für Variablen

Zeige Informationen einer Variable an:

```php
print_r($array);    // Lesbaren Wert einer Variable zurückgeben
```

## Arithmetische Funktionen

```php
floor();    // Rundet eine Fließkommazahl ab
max();    // Bestimmt größten Wert eines Arrays
min();    // Bestimmt kleinsten Wert eines Arrays
base_convert();    // Konvertiert zwischen Zahlensystemen
```

## Strings

Einfaches Hochkomma (Standard escape character; verbinden mit .)

Doppeltes Hochkomma (Erweiterte escape character, z.B. \n, \t, \r; verbinden mit .)

### Operationen

```php
printf();    // Gibt einen formatierten Text aus
sprintf();    // Gibt einen formatierten Text zurück
vrptinf();    // Array als Agrumente ("%s, %s", $array)
sscanf();    // Liest einen String ein
print();    // Gibt einen Text aus
```

## Arrays

### Allgemein

Nummerische Indizes:

```php
$fields = array(1,3,3,2);
echo $fields[3];
```

Assoziative Arrays:

```php
$keys = array(
"Key1" => "House",
"Key2" => "Carport");
echo $keys["Key1"];
```

### Funktionen

Sortieren:

```php
// Assoziativ
ksort($array); // Nach Schlüssel
asort($array); // Nach Wert

// Nummerisch
sort($numbers); // Aufsteigend
rsort($numbers); // Absteigend
```

Hinzufügen:

```php
// Assoziativ
$products = array("AAN1" => "Water");
$products["CG1D"] = "TV";

// Nummerisch
$numbers = array(1,2,3,4);
array_push($numbers,5);    // Am Ende

array_unshift($numbers,0);    // Am Anfang
```

Löschen:

```php
// Assoziativ
$newArray = array_slice($arrays,1,1);

// Nummerisch
$last = array_pop($array);

$first = array_shift($array);
```

Konvertierung:

```php
// String zu Array
$str = "Hello World!";
$newArray = explode(" ", $str);

// Array zu String
$array = array("An","awesome","String");
$newStr = implode(" ", $array);
```

Zuweisung:

```php
$myArr = array("Hiking", "the forrest", "Sandwiches");
list($action, $place, $food) = $myArr;
echo "I like $action in $place and eating $food";
```

Verbinden:

```php
$fullarray = array_merge($array1,$array2);    // Bis PHP 7.4
$fullarray = [...$array1,...$array2];    // Ab PHP 7.4
```

## Zeit

Aktuelle Zeit ermitteln:

```php
$current = mktime();
```

Aktuelles Datum ermitteln:

```php
$str = date("d.m.Y");
```

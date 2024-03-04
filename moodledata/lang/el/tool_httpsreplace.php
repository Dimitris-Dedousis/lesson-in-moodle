<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_httpsreplace', language 'el', version '4.3'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'Ολοκληρώθηκε';
$string['count'] = 'Αριθμός στοιχείων ενσωματωμένου περιεχομένου';
$string['disclaimer'] = 'Καταλαβαίνω τους κινδύνους αυτής της ενέργειας';
$string['doclink'] = 'Εργαλείο μετατροπής HTTPS';
$string['doit'] = 'Εκτέλεση μετατροπής';
$string['domain'] = 'Προβληματικός τομέας';
$string['domainexplain'] = 'Όταν μεταφέρεται ένας ιστότοπος από HTTP σε HTTPS, όλο το ενσωματωμένο περιεχόμενο HTTP θα σταματήσει να λειτουργεί. Αυτό το εργαλείο σάς επιτρέπει να μετατρέπετε αυτόματα το περιεχόμενο HTTP σε HTTPS. Πριν από τη διεξαγωγή της μετατροπής, το περιεχόμενο θα σαρωθεί για να εντοπιστούν τυχόν διευθύνσεις URL που ενδέχεται να μην λειτουργούν μετά τη μετατροπή. Μπορεί να θέλετε να ελέγξετε ότι για την καθεμιά διεύθυνση υπάρχει διαθέσιμη υποστήριξη για HTTPS ή να βρείτε εναλλακτικούς πόρους.';
$string['domainexplainhelp'] = 'Αυτοί οι τομείς βρίσκονται στο περιεχόμενό σας, αλλά δεν φαίνεται να υποστηρίζουν περιεχόμενο HTTPS. Μετά την μετάβαση στο HTTPS, το περιεχόμενο που περιλαμβάνεται από αυτούς τους ιστοτόπους δεν θα εμφανίζεται πλέον στο Moodle για χρήστες με ασφαλείς σύγχρονους περιηγητές. Είναι πιθανό ότι αυτές οι τοποθεσίες είναι προσωρινά ή μόνιμα μη διαθέσιμες και δεν λειτουργούν με καμία από τις δύο επιλογές ρυθμίσεων ασφαλείας. Συνεχίστε μόνο αφού ελέγξετε αυτά τα αποτελέσματα και προσδιορίσετε εάν αυτό το εξωτερικά φιλοξενούμενο περιεχόμενο είναι μη απαραίτητο. Σημείωση: Αυτό το περιεχόμενο δεν θα λειτουργεί πλέον κατά τη μετάβαση στο HTTPS ούτως ή άλλως.';
$string['httpwarning'] = 'Αυτό το στιγμιότυπο εξακολουθεί να εκτελείται σε HTTP. Μπορείτε ακόμα να εκτελέσετε αυτό το εργαλείο και το εξωτερικό περιεχόμενο θα αλλάξει σε HTTPS, αλλά το εσωτερικό περιεχόμενο θα παραμείνει σε HTTP. Θα χρειαστεί να εκτελέσετε ξανά αυτό το σενάριο μετά την εναλλαγή στο HTTPS για τη μετατροπή εσωτερικού περιεχομένου.';
$string['notimplemented'] = 'Λυπούμαστε, αυτή η λειτουργία δεν έχει υλοποιηθεί στο πρόγραμμα οδήγησης βάσης δεδομένων.';
$string['oktoprocede'] = 'Η σάρωση δεν εντοπίζει προβλήματα με το περιεχόμενό σας. Μπορείτε να προχωρήσετε στην αναβάθμιση οποιουδήποτε περιεχομένου HTTP για να χρησιμοποιήσετε το HTTPS.';
$string['pageheader'] = 'Αναβαθμίστε τις διευθύνσεις URL εξωτερικά-φιλοξενούμενου περιεχομένου σε HTTPS';
$string['pluginname'] = 'Εργαλείο μετατροπής HTTPS';
$string['privacy:metadata'] = 'Το πρόσθετο «Μετατροπή HTTPS» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['replacing'] = 'Αντικατάσταση περιεχομένου HTTP με HTTPS ...';
$string['searching'] = 'Αναζήτηση {$a}';
$string['takeabackupwarning'] = 'Προειδοποίηση: Μετά την εκτέλεση αυτού του εργαλείου, οι αλλαγές δεν μπορούν να επανέλθουν. Προτού προχωρήσετε, συνιστάται η δημιουργία αντιγράφων ασφαλείας του ιστοτόπου, καθώς υπάρχει μικρός κίνδυνος λανθασμένης αντικατάστασης περιεχομένου.';
$string['toolintro'] = 'Αν σκοπεύετε να μετατρέψετε τον ιστότοπό σας σε HTTPS, μπορείτε να χρησιμοποιήσετε το <a href="{$a}">εργαλείο μετατροπής HTTPS</a> για να μετατρέψετε το ενσωματωμένο περιεχόμενό σας σε HTTPS.';

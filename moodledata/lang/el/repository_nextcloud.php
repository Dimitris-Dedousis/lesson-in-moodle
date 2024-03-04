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
 * Strings for component 'repository_nextcloud', language 'el', version '4.3'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Εσωτερικά και εξωτερικά';
$string['cannotconnect'] = 'Δεν ήταν δυνατή η αυθεντικοποίηση του χρήστη. Παρακαλούμε, συνδεθείτε και στη συνέχεια ανεβάστε το αρχείο.';
$string['chooseissuer'] = 'Εκδότης';
$string['chooseissuer_help'] = 'Για να προσθέσετε έναν νέο εκδότη, μεταβείτε στη Διαχείριση ιστοτόπου/Εξυπηρετητής/ Υπηρεσίες OAuth 2.';
$string['configplugin'] = 'Ρυθμίσεις αποθετηρίου nextcloud';
$string['configuration_exception'] = 'Παρουσιάστηκε σφάλμα στις ρυθμίσεις του προγράμματος-πελάτη OAuth 2: {$a}';
$string['contactadminwith'] = 'Η ενέργεια που ζητήσατε δεν μπόρεσε να εκτελεστεί. Εάν αυτό συμβαίνει επανειλημμένα, επικοινωνήστε με τον διαχειριστή του ιστοτόπου με τις ακόλουθες επιπρόσθετες πληροφορίες:<br>«<i>{$a}</i>».';
$string['couldnotmove'] = 'Το αρχείο που ζητήθηκε δεν ήταν δυνατό να μετακινηθεί στον φάκελο {$a}.';
$string['defaultreturntype'] = 'Προεπιλεγμένος τύπος επιστροφής';
$string['endpointnotdefined'] = 'Το τελικό σημείο {$a} δεν έχει οριστεί.';
$string['external'] = 'Εξωτερικά (μόνο σύνδεσμοι αποθηκευμένοι στο Moodle)';
$string['externalpubliclinkwarning'] = 'Προειδοποίηση: Αυτό το αρχείο θα γίνει δημόσιο.';
$string['filenotaccessed'] = 'Δεν ήταν δυνατή η πρόσβαση στο αρχείο που ζητήθηκε. Ελέγξτε εάν έχετε επιλέξει ένα έγκυρο αρχείο και έχετε αυθεντικοποιηθεί με το σωστό λογαριασμό.';
$string['fileoptions'] = 'Οι τύποι και οι προεπιλογές για τα επιστραφέντα αρχεία μπορούν να ρυθμιστούν εδώ. Σημειώστε ότι όλα τα αρχεία που συνδέονται εξωτερικά θα ενημερωθούν ώστε ο ιδιοκτήτης να είναι ο λογαριασμός του συστήματος Moodle.';
$string['foldername'] = 'Όνομα φακέλου που δημιουργείται στον ιδιωτικό χώρο των χρηστών του Nextcloud που περιέχει όλους τους συνδέσμους ελεγχόμενης πρόσβασης.';
$string['foldername_help'] = 'Για να διασφαλιστεί ότι οι χρήστες θα βρίσκουν τα αρχεία που τους διαμοιράζονται, τα διαμοιραζόμενα αποθηκεύονται σε έναν συγκεκριμένο φάκελο.

Αυτή η ρύθμιση καθορίζει το όνομα του φακέλου. Συνιστάται να επιλέξετε ένα όνομα που σχετίζεται με το στιγμιότυπο του Moodle σας.';
$string['internal'] = 'Εσωτερικά (αρχεία αποθηκευμένα στο Moodle)';
$string['invalidresponse'] = 'Μη έγκυρη απόκριση εξυπηρετητή.';
$string['issuervalidation_invalid'] = 'Αυτή τη στιγμή ο εκδότης {$a} είναι ενεργός, ωστόσο δεν εφαρμόζει όλα τα απαραίτητα τελικά σημεία. Το αποθετήριο δεν θα λειτουργήσει.';
$string['issuervalidation_valid'] = 'Αυτή τη στιγμή ο εκδότης {$a} είναι ενεργός.';
$string['issuervalidation_without'] = 'Δεν έχετε επιλέξει ακόμη έναν εξυπηρετητή Nextcloud ως τον εκδότη του OAuth 2.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Εμφάνιση Nextcloud';
$string['no_right_issuers'] = 'Κανένας από τους υπάρχοντες εκδότες δεν εφαρμόζει όλα τα απαιτούμενα τελικά σημεία. Παρακαλούμε, καταχωρήστε έναν κατάλληλο εκδότη.';
$string['noclientconnection'] = 'Δεν ήταν δυνατή η σύνδεση των πελατών OAuth.';
$string['notauthorized'] = 'Δεν έχετε εξουσιοδότηση να εκτελέσετε αυτό το αίτημα. Παρακαλούμε, βεβαιωθείτε ότι έχετε πραγματοποιήσει αυθεντικοποίηση με το σωστό λογαριασμό.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 services configuration">Ρύθμιση υπηρεσιών OAuth 2 </a>';
$string['pathnotcreated'] = 'Το μονοπάτι φακέλου {$a} δεν ήταν δυνατό να δημιουργηθεί στο λογαριασμό συστήματος.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Αποθετήριο Nextcloud';
$string['privacy:metadata'] = 'Το πρόσθετο αποθετηρίου Nextcloud ούτε αποθηκεύει δεδομένα προσωπικού χαρακτήρα ούτε μεταδίδει δεδομένα χρήστη στο απομακρυσμένο σύστημα.';
$string['request_exception'] = 'Ένα αίτημα στο {$a->instance} απέτυχε. {$a->errormessage}';
$string['requestnotexecuted'] = 'Δεν ήταν δυνατή η εκτέλεση του αιτήματος. Αν αυτό συμβεί επανειλημμένα, παρακαλούμε, επικοινωνήστε με τον διαχειριστή του ιστοτόπου.';
$string['right_issuers'] = 'Οι ακόλουθοι εκδότες υλοποιούν τα απαιτούμενα τελικά σημεία: <br> {$a}';
$string['supportedreturntypes'] = 'Υποστηριζόμενα αρχεία';

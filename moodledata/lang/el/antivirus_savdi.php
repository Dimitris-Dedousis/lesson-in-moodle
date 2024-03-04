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
 * Strings for component 'antivirus_savdi', language 'el', version '4.3'.
 *
 * @package     antivirus_savdi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkconnectivity'] = 'Συνδεσιμότητα SAVDI';
$string['checkconnectivityfalsepositive'] = 'Ψευδώς θετικά από την δοκιμή σάρωσης.';
$string['checkconnectivitynoconfig'] = 'Δεν έχει ρυθμιστεί καμία αυτόνομη υπηρεσία (daemon) SAVDI';
$string['checkconnectivitynomethods'] = 'Η επικοινωνία σαρωτή ήταν επιτυχής, αλλά δεν έχει ενεργοποιηθεί καμία μέθοδος σάρωσης.';
$string['checkconnectivityok'] = 'Η δοκιμή σαρωτή ήταν επιτυχής.';
$string['checkconnectivityscandataerror'] = 'Σφάλμα δοκιμής SCANDATA: {$a}';
$string['checkconnectivityscanfileerror'] = 'Σφάλμα δοκιμής SCANFILE: {$a}';
$string['checkconnectivitytmpfileerror'] = 'Η επικοινωνία σαρωτή ήταν επιτυχής, αλλά δεν μπόρεσε να δημιουργηθεί αρχείο δοκιμής.';
$string['chmodscanfile'] = 'Αλλαγή δικαιωμάτων αρχείου σάρωσης';
$string['chmodscanfiledescr'] = 'Ενεργοποιήστε αυτήν την επιλογή για να αλλάξετε προσωρινά τα δικαιώματα του αρχείου που σαρώνεται σε αναγνώσιμη από όλους. Χρήσιμο όταν η διεργασία σαρωτή είναι τοπική στον εξυπηρετητή ιστού, αλλά το αρχείο που σαρώνεται δεν είναι αναγνώσιμο από τη διεργασία σαρωτή. Δεν είναι απαραίτητο εάν η διαδικασία σαρωτή είναι απομακρυσμένη.';
$string['clientresult0'] = 'ΟΚ';
$string['clientresult1'] = 'Βρέθηκε ιός';
$string['clientresult2'] = 'Σφάλμα';
$string['clientresult3'] = 'Μη υποστηριζόμενο αίτημα';
$string['clientresult4'] = 'Πάρα πολά δεδομένα';
$string['connretry'] = 'Προσπάθεια σύνδεσης ξανά';
$string['connretrydesc'] = 'Εάν η σύνδεση με το SAVDI αποτύχει, η προσπάθεια σύνδεσης θα επαναληφθεί πολλές φορές.';
$string['conntcp'] = 'TCP/IP host:port';
$string['conntype'] = 'Σύνδεση με την αυτόνομη υπηρεσία (daemon) SAVDI από';
$string['conntypedescr'] = 'Εάν ο δαίμονας SAVDI είναι τοπικός στον εξυπηρετητή ιστού και μπορεί να διαβάσει αρχεία που δημιουργήθηκαν από τον εξυπηρετητή ιστού, βεβαιωθείτε ότι ο δαίμονας υποστηρίζει τον τύπο αιτήματος «SCANFILE» και απενεργοποιήστε την επιλογή *Ο δαίμονας SAVDI είναι απομακρυσμένος*.

Εάν ο δαίμονας SAVDI είναι απομακρυσμένος στον εξυπηρετητή ιστού ή είναι τοπικός, αλλά δεν μπορεί να διαβάσει αρχεία που δημιουργήθηκαν από εξυπηρετητή ιστού, βεβαιωθείτε ότι ο δαίμονας υποστηρίζει τον τύπο αιτήματος «SCANDATA» και ενεργοποιήστε την επιλογή *Ο δαίμονας SAVDI είναι απομακρυσμένος*.';
$string['conntypetcp'] = 'Σύνδεση TCP/IP';
$string['conntypeunix'] = 'Unix domain socket (υποδοχή τομέα Unix)';
$string['connunix'] = 'Μονοπάτι προς το Unix domain socket';
$string['daemonerroractlikevirus'] = 'Να θεωρούνται τα αρχεία ως μολυσμένα από ιό';
$string['daemonerrordonothing'] = 'Να θεωρούνται τα αρχεία ως ΟΚ';
$string['errorcantopentcpsocket'] = 'Η απόπειρα σύνδεσης με την υποδοχή TCP επέστρεψε σφάλμα {$a}';
$string['errorcantopenunixsocket'] = 'Η απόπειρα σύνδεσης με την υποδοχή τομέα Unix (Unix domain socket) επέστρεψε σφάλμα {$a}';
$string['errorfileopen'] = 'Σφάλμα κατά το άνοιγμα του αρχείου {$a}';
$string['errorgeneral'] = 'Ο σαρωτής SAVDI ανέφερε: {$a}';
$string['errorprotocol'] = 'Σφάλμα προτοκόλλου SAVDI: {$a}';
$string['errorrejected'] = 'Ο εξυπηρετητής SAVDI απέρριψε το αίτημα: {$a}';
$string['errorsenddatashort'] = 'Τα δεδομένα που στάλθηκαν ήταν λιγότερα από τα αναμενόμενα';
$string['errorsenddatatoobig'] = 'Το μέγεθος των δεδομένων υπερβαίνει το όριο των {$a} byte του εξυπηρετητή SAVDI';
$string['errorservernotsupported'] = 'Ο εξυπηρετητής SAVDI δεν υποστηρίζει τον τύπο αιτήματος {$a}';
$string['ondaemonerror'] = 'Σφάλμα στην αυτόνομη υπηρεσία (daemon) του σαρωτή';
$string['ondaemonerrordescr'] = 'Ενέργεια που πρέπει να αναληφθεί όταν παρουσιάζεται σφάλμα σύνδεσης ή σαρωτή.';
$string['pluginname'] = 'Αντι-ιικό Sophos SAVDI';
$string['privacy:metadata'] = 'Το πρόσθετο Αντι-ιικό Sophos SAVDI δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['scannerisremote'] = 'Η αυτόνομη υπηρεσία (daemon) SAVDI είναι απομακρυσμένη';
$string['scannerisremotedescr'] = 'Η ενεργοποίηση αυτής της επιλογής αποτρέπει την άμεση ανάγνωση αρχείων από το δαίμονα (διεργασία) SAVDI, και αντί αυτού αντιγράφει τα δεδομένα που θα σαρωθούν στον δαίμονα μέσω σύνδεσης δικτύου. Ο δαίμονας SAVDI πρέπει να υποστηρίζει τον τύπο αιτήματος «SCANDATA» και η ρύθμισή του «maxscandata» πρέπει να είναι αρκετά μεγάλη για το αναμενόμενο περιεχόμενο.';
$string['testclient'] = 'Δοκιμή σύνδεσης του Sophos SAVDI';
$string['testclient_info'] = '<a href="{$a}">Ελέγξτε ότι η επικοινωνία με τον διαμορφωμένο δαίμονα SAVDI λειτουργεί, χρησιμοποιώντας αυτό το εργαλείο δοκιμής σύνδεσης</a>. Για να ελέγξετε εάν το SAVDI μπορεί να ανιχνεύσει σωστά ιούς, ανεβάστε ένα αρχείο σε ένα μάθημα ή στο αποθετήριο «Ιδιωτικά αρχεία». Για μια δοκιμή πραγματικά θετικής απόκρισης/εύρεσης ιού, παρακαλούμε, διερευνήστε το <a href="https://en.wikipedia.org/wiki/EICAR_test_file">EICAR αρχείο δοκιμής</a>.';
$string['testclienthasscandata'] = 'Υποστηρίζει αιτήματα SCANDATA';
$string['testclienthasscandir'] = 'Υποστηρίζει αιτήματα SCANDIR';
$string['testclienthasscandirr'] = 'Υποστηρίζει αιτήματα SCANDIRR';
$string['testclienthasscanfile'] = 'Υποστηρίζει αιτήματα SCANFILE';
$string['testclientmaxscandata'] = 'Μέγιστο μέγεθος αιτήματος SCANDATA';
$string['testclientresult'] = 'Έκβαση σύνδεσης';
$string['testclientscandataresult'] = 'Αποτέλεσμα αιτήματος SCANDATA';
$string['testclientscanfileresult'] = 'Αποτέλεσμα αιτήματος SCANFILE';
$string['testclientscantest'] = 'Ανεβάστε ένα αρχείο παρακάτω για να δοκιμάσετε τους τύπους αιτημάτων SCANFILE και SCANDATA.';
$string['testclientscantestpath'] = 'Ανέβηκε προσωρινό αρχείο';
$string['testclientscanuploaderror'] = 'Σφάλμα κατά το ανέβασμα αρχείου: {$a}';
$string['testclientscanuploaderrornotrecognised'] = 'Σφάλμα κατά το ανέβασμα/μεταφόρτωση αρχείου PHP: Το {$a} δεν αναγνωρίζεται ως ανεβασμένο αρχείο.';
$string['testclientuploadandscan'] = 'Ανέβασμα και σάρωση αρχείου';
$string['testclientversion'] = 'Έκδοση σαρωτή';
$string['warngeneral'] = 'Ο σαρωτής SAVDI ανέφερε: {$a}';
$string['warnprotocol'] = 'Προειδοποίηση πρωτοκόλλου SAVDI: {$a}';

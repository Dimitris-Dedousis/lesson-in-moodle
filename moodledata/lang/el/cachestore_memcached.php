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
 * Strings for component 'cachestore_memcached', language 'el', version '4.3'.
 *
 * @package     cachestore_memcached
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Εγγραφές σε ενδιάμεση μνήμη';
$string['bufferwrites_help'] = 'Ενεργοποιεί ή απενεργοποιεί την ενδιάμεση μνήμη Εισόδου/Εξόδου (buffered I/O). Η ενεργοποίηση προκαλεί τις εντολές αποθήκευσης να αποθηκεύουν σε ενδιάμεση μνήμη αντί να αποστέλλουν τα δεδομένα. Οποιαδήποτε ενέργεια που ανακτά δεδομένα προκαλεί την αποστολή των ενδιάμεσα αποθηκευμένων στην απομακρυσμένη σύνδεση. Η διακοπή ή το κλείσιμο της σύνδεσης θα προκαλέσει επίσης την ώθηση των ενδιάμεσα αποθηκευμένων δεδομένων στην απομακρυσμένη σύνδεση.';
$string['clustered'] = 'Ενεργοποίηση συστάδων εξυπηρετητών';
$string['clustered_help'] = 'Αυτό χρησιμοποιείται για να επιτρέψει λειτουργία ορισμού-πολλών με μόνο μία ανάγνωση. Η σκοπούμενη περίπτωση χρήσης είναι να δημιουργηθεί μια βελτιωμένη αποθήκευση για ρυθμίσεις εξισορρόπησης φορτίου. Η αποθήκευση θα βρίσκει και θα φέρνει από έναν εξυπηρετητή (συνήθως στον ίδιο τοπικό κεντρικό Η/Υ), αλλά θα ορίζει σε πολλούς (όλους τους εξυπηρετητές στον σχηματισμό ισορρόπησης). Για κρυφές μνήμες με πολύ υψηλές αναλογίες ανάγνωσης προς εγγραφές, αυτό εξοικονομεί σημαντικό ποσό δικτυακού έξτρα φόρτου. Όταν είναι ενεργοποιημένη αυτή η επιλογή, ο παραπάνω εξυπηρετητής θα χρησιμοποιείται για να βρίσκει και να φέρνει δεδομένα.';
$string['clusteredheader'] = 'Χωριστοί εξυπηρετητές';
$string['hash'] = 'Μέθοδος κατατεμαχισμού (hash)';
$string['hash_crc'] = 'CRC';
$string['hash_default'] = 'Προεπιλογή (ένα-κάθε-φορά)';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Καθορίζει τον αλγόριθμο κατατεμαχισμού (hash function) που θα χρησιμοποιηθεί. Κάθε αλγόριθμος έχει τα υπέρ και τα κατά. Επιλέξτε τον προεπιλεγμένο αν δεν τα γνωρίζετε ή δεν σας ενδιαφέρουν.';
$string['hash_hsieh'] = 'Hsieh';
$string['hash_md5'] = 'MD5';
$string['hash_murmur'] = 'Murmur';
$string['isshared'] = 'Διαμοιραζόμενη κρυφή μνήμη';
$string['isshared_help'] = 'Χρησιμοποιείται επίσης ο αντιγραμμένος σε κρυφή μνήμη εξυπηρετητής σας και από άλλες εφαρμογές; Εάν η κρυφή μνήμη χρησιμοποιείται από κοινού και με άλλες εφαρμογές, τότε κάθε κλειδί/κωδικός θα διαγραφεί ξεχωριστά για να διασφαλιστεί ότι θα εκκαθαριστούν μόνο τα δεδομένα που ανήκουν σε αυτή την εφαρμογή (αφήνοντας αμετάβλητα τα δεδομένα κρυφής αποθήκευσης των εξωτερικών εφαρμογών). Αυτό μπορεί να έχει ως αποτέλεσμα μειωμένη απόδοση όταν εκκαθαρίζετε την κρυφή μνήμη, ανάλογα με τις ρυθμίσεις του εξυπηρετητή σας. Εάν εκτελείτε μια αποκλειστική κρυφή μνήμη για αυτή την εφαρμογή, τότε ολόκληρη η κρυφή μνήμη μπορεί να εκκαθαριστεί με ασφάλεια χωρίς κίνδυνο να καταστραφούν τα δεδομένα κρυφής μνήμης άλλης εφαρμογής. Αυτό θα πρέπει να έχει ως αποτέλεσμα την αύξηση της απόδοσης όταν εκκαθαρίζετε την κρυφή μνήμη.';
$string['pluginname'] = 'Memcached (σε κρυφή μνήμη ΒΔ στη RAM)';
$string['prefix'] = 'Κλειδί προθέματος';
$string['prefix_help'] = 'Αυτό μπορεί να χρησιμοποιηθεί για τη δημιουργία ενός «τομέα» για τα κλειδιά στοιχείων σας, που επιτρέπει να δημιουργήσετε πολλαπλές αποθηκεύσεις memcache (κρυφή μνήμη για βελτίωση απόκρισης ΒΔ από ιστοσελίδες) σε μια μοναδική εγκατάσταση memcached. Δεν μπορεί να υπερβαίνει τους 16 χαρακτήρες, προκειμένου να διασφαλιστεί ότι δεν θα παρουσιαστούν ζητήματα μήκους κλειδιών.';
$string['prefixinvalid'] = 'Μη έγκυρο πρόθεμα. Μπορείτε να χρησιμοποιήσετε μόνο τα a-z A-Z 0-9 -_.';
$string['privacy:metadata:memcached'] = 'Το πρόσθετο Memcached cachestore αποθηκεύει στοιχεία για λίγο ως μέρος της λειτουργικότητας της κρυφής μνήμης. Αυτά τα δεδομένα αποθηκεύονται σε έναν εξυπηρετητή Memcache, όπου τα δεδομένα διαγράφονται τακτικά.';
$string['privacy:metadata:memcached:data'] = 'Τα διάφορα δεδομένα που αποθηκεύονται στην κρυφή μνήμη';
$string['serialiser_igbinary'] = 'Ο σειριοποιητής igbinary (PHP serializer).';
$string['serialiser_json'] = 'Ο σειριοποιητής JSON (PHP serializer).';
$string['serialiser_php'] = 'Ο προεπιλεγμένος PHP σειριοποιητής (serializer).';
$string['servers'] = 'Εξυπηρετητές';
$string['servers_help'] = 'Εδώ ορίζονται οι εξυπηρετητές που θα πρέπει να χρησιμοποιηθούν από αυτόν τον προσαρμογέα memcached (σε κρυφή μνήμη ΒΔ στη RAM).
Οι εξυπηρετητές πρέπει να ορίζονται ένας ανά γραμμή και να αποτελούνται από μια διεύθυνση εξυπηρετητή και προαιρετικά μια θύρα και βαρύτητα.
Εάν δεν δοθεί θύρα, τότε χρησιμοποιείται η προεπιλεγμένη θύρα (11211).

Για παράδειγμα:
<pre>
server.url.com
ipaddress:port
servername:port:weight
</pre>

Εάν η ρύθμιση *Ενεργοποίηση εξυπηρετητών σε συστάδες* είναι ενεργοποιημένη παρακάτω, πρέπει να υπάρχει μόνο ένας κατάλογος που εμφανίζεται εδώ. Αυτό συνήθως θα είναι ένα όνομα/διεύθυνση που πάντα επιλύεται στον τοπικό Η/Υ, όπως το 127.0.0.1 ή το localhost.';
$string['serversclusterinvalid'] = 'Όταν ενεργοποιούνται οι συστάδες απαιτείται ακριβώς ένας εξυπηρετητής.';
$string['sessionhandlerconflict'] = 'Προειδοποίηση: Ένα στιγμιότυπο memcache ({$a}) έχει ρυθμιστεί να χρησιμοποιεί τον ίδιο εξυπηρετητή memcached με τις συνόδους. Εκκαθάριση όλων των κρυφών μνημών θα οδηγήσει και σε εκκαθάριση των συνόδων.';
$string['setservers'] = 'Εξυπηρετητές που έχουν τεθεί/οριστεί';
$string['setservers_help'] = 'Αυτή είναι η λίστα των εξυπηρετητών που θα ενημερωθούν όταν τα δεδομένα τροποποιηθούν στην κρυφή μνήμη. Γενικά, το πλήρες όνομα κάθε εξυπηρετητή στην λίστα.
**Πρέπει** να περιλαμβάνει τον εξυπηρετητή που περιλαμβάνεται στην λίστα *Εξυπηρετητές* παραπάνω, ακόμα και αν έχει διαφορετικό όνομα Η/Υ (hostname).
Οι εξυπηρετητές θα πρέπει να ορίζονται ένας ανά γραμμή και να αποτελούνται από μια διεύθυνση εξυπηρετητή και προαιρετικά μια θύρα.
Εάν δεν δοθεί θύρα, τότε χρησιμοποιείται η προεπιλεγμένη θύρα (11211).

Για παράδειγμα:
<pre>
server.url.com
ipaddress:port
</pre>';
$string['testservers'] = 'Εξυπηρετητές δοκιμών';
$string['testservers_desc'] = 'Μια ή περισσότερες συμβολοσειρές σύνδεσης για εξυπηρετητές memcached (με κρυφή μνήμη ΒΔ στη RAM) για να δοκιμάσετε. Εάν έχει οριστεί δοκιμαστικός εξυπηρετητής, τότε μπορεί να εξεταστεί η απόδοση του memcached με χρήση της σελίδας απόδοσης της κρυφής μνήμης στο μπλοκ διαχείρισης.
Για παράδειγμα: 127.0.0.1:11211';
$string['upgrade200recommended'] = 'Σας συνιστούμε να αναβαθμίσετε την επέκταση PHP Memcached στην έκδοση 2.0.0 ή μεγαλύτερη.
Η έκδοση της επέκτασης PHP Memcached που χρησιμοποιείτε αυτή τη στιγμή δεν παρέχει τη λειτουργικότητα που χρησιμοποιεί το Moodle για να εξασφαλίσει μια κρυφή μνήμη με το μοντέλο ασφαλείας αμμοδοχείου. Μέχρι να αναβαθμίσετε, σας συνιστούμε να μην ρυθμίζετε άλλες εφαρμογές να χρησιμοποιούν τους ίδιους εξυπηρετητές Memcached τους οποίους έχει ρυθμιστεί να χρησιμοποιεί το Moodle.';
$string['usecompression'] = 'Χρήση συμπίεσης';
$string['usecompression_help'] = 'Ενεργοποιεί ή απενεργοποιεί την συμπίεση ωφέλιμου φορτίου. Όταν ενεργοποιείται, στοιχεία με μέγεθος μεγαλύτερο από ένα συγκεκριμένο όριο (προς το παρόν 100 bytes) θα συμπιέζονται κατά την αποθήκευση και θα αποσυμπιέζονται κατά την ανάκτηση διαφανώς.';
$string['useserialiser'] = 'Χρήση σειριοποιητή';
$string['useserialiser_help'] = 'Καθορίζει τον σειριοποιητή που θα χρησιμοποιηθεί για τη σειριοποίηση των μη κλιμακωτών τιμών. Οι έγκυροι σειριοποιητές είναι Memcached :: SERIALIZER_PHP ή Memcached :: SERIALIZER_IGBINARY. Ο τελευταίος υποστηρίζεται μόνο όταν η memcached (κρυφή μνήμη DB με χρήση RAM) έχει ρυθμιστεί στην επιλογή --enable-memcached-igbinary και έχει εγκατασταθεί και φορτωθεί η επέκταση (extension, πρόσθετο) igbinary (γενικά οικονομικότερο σε χώρο και χρόνο).';

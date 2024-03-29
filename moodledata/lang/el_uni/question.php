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
 * Strings for component 'question', language 'el_uni', version '4.2'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['generalfeedback_help'] = 'Η γενική ανατροφοδότηση εμφανίζεται στον φοιτητή αφού ολοκληρώσει την ερώτηση. Αντίθετα από την ανατροφοδότηση ερώτησης, που εξαρτάται από τον τύπο της ερώτησης και τι απάντηση έδωσε ο φοιτητής, εδώ το ίδιο κείμενο γενικής ανατροφοδότησης εμφανίζεται σε όλους τους φοιτητές. Μπορείτε να χρησιμοποιήσετε την γενική ανατροφοδότηση για να δώσετε στους φοιτητές μια πλήρως δουλεμένη απάντηση και ίσως ένα σύνδεσμο προς περισσότερες πληροφορίες που μπορούν να χρησιμοποιήσουν αν δεν καταλάβουν τις ερωτήσεις.';
$string['howquestionsbehave_help'] = 'Οι φοιτητές μπορούν να αλληλεπιδράσουν με τις ερωτήσεις στο κουίζ με διάφορους ποικίλους τρόπους. Για παράδειγμα, μπορεί να επιθυμείτε οι φοιτητές να δώσουν απάντηση σε κάθε ερώτηση και μετά να υποβάλουν ολόκληρο το κουίζ, πριν οτιδήποτε βαθμολογηθεί ή πριν πάρουν οποιαδήποτε ανατροφοδότηση. Αυτή θα ήταν μια κατάσταση λειτουργίας «καθυστέρησης ανατροφοδότησης». Εναλλακτικά, μπορεί να επιθυμείτε οι φοιτητές να υποβάλουν κάθε ερώτηση μόλις την απαντήσουν ώστε να πάρουν άμεση ανατροφοδότηση, και αν δεν απαντήσουν σωστά αμέσως να ξαναπροσπαθήσουν για λιγότερους βαθμούς. Αυτή θα ήταν μια κατάσταση λειτουργίας «διαδραστική με πολλές προσπάθειες». Αυτές είναι πιθανά οι δύο πιο χρησιμοποιούμενες καταστάσεις λειτουργίας.';
$string['penaltyfactor_help'] = 'Μπορείτε να ορίσετε ένα κλάσμα του πλήρους σκορ κάθε ερώτησης που θα αφαιρείται για κάθε λάθος απάντηση. Η δυνατότητα αυτή έχει νόημα μόνο αν το κουίζ είναι ρυθμισμένο να λειτουργεί σε προσαρμοστικό περιβάλλον, επιτρέποντας στους φοιτητές να κάνουν επαναλαμβανόμενες προσπάθειες σε κάθε ερώτηση. Ο συντελεστής ποινής πρέπει να είναι αριθμός ανάμεσα στο 0 και στο 1. Συντελεστής 1 σημαίνει ότι ο φοιτητής πρέπει να απαντήσει σωστά στην πρώτη απόκριση για να κερδίσει τους βαθμούς της ερώτησης. Συντελεστής 0 σημαίνει ότι ο φοιτητής μπορεί να δοκιμάσει όσες φορές θέλει μέχρι να βρει τη σωστή απάντηση, οπότε θα πάρει και τη μέγιστη δυνατή βαθμολογία.';
$string['penaltyforeachincorrecttry_help'] = 'Όταν εκτελείτε τις ερωτήσεις σας χρησιμοποιώντας την τακτική «Αλληλεπιδραστικά με πολλαπλές προσπάθειες» ή την τακτική «Προσαρμοστική λειτουργία», έτσι ώστε ο φοιτητής να επιτρέπεται να κάνει αρκετές προσπάθειες για να βρει την σωστή απάντηση, τότε αυτή η επιλογή ελέγχει το πόσο τιμωρείται για κάθε λανθασμένη προσπάθεια.

Η ποινή είναι μια αναλογία (ένα ποσοστό) του συνολικού βαθμού της ερώτησης. Έτσι αν η ερώτηση αξίζει τρεις βαθμούς και η ποινή είναι 0.3333333, τότε ο φοιτητής θα σκοράρει 3 αν απαντήσει την ερώτηση σωστά με την πρώτη προσπάθεια, 2 αν την απαντήσει σωστά στη δεύτερη προσπάθεια και 1 αν την απαντήσει σωστά στην τρίτη προσπάθεια.

Για κάποιες ερωτήσεις με πολλά σκέλη, αυτή η λογική βαθμολόγησης εφαρμόζεται χωριστά σε κάθε σκέλος της ερώτησης. Οι λεπτομέρειες εξαρτώνται από τον τύπο ερωτήματος και μπορεί να είναι περίπλοκες, αλλά η αρχή είναι να δώσουμε στους φοιτητές αναγνώριση/έπαινο για τις γνώσεις που έχουν επιδείξει, όσο το δυνατόν πιο δίκαια.';
$string['specificfeedback_help'] = 'Ανατροφοδότηση που εξαρτάται από το τι απάντηση έδωσε ο φοιτητής';

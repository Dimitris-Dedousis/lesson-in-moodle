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
 * Strings for component 'tool_uploadenrolmentmethods', language 'el_uni', version '4.2'.
 *
 * @package     tool_uploadenrolmentmethods
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['csvfile_help'] = 'Η μορφή του αρχείου CSV πρέπει να έχει ως εξής:

* Γραμμές που αρχίζουν με το χαρακτήρα # ή ; είναι σχόλια και παραλείπονται.
* Κάθε γραμμή του αρχείου περιέχει μια εγγραφή.
* Κάθε εγγραφή είναι μια σειρά δεδομένων σε σταθερή σειρά διαχωρισμένη με κόμματα.
* Όλα τα πεδία είναι υποχρεωτικά.
* Τα πεδία είναι: λειτουργία, μέθοδος εγγραφής, σύντομο όνομα μαθήματος, σύντομο όνομα γονικού μαθήματος ή αριθμός αναγνωριστικού συνόλου χρηστών, κατάσταση απενεργοποίησης, όνομα ομάδας.
* Οι λειτουργίες είναι add, del (ete) και upd (ate).
* Οι υποστηριζόμενες μέθοδοι εγγραφής είναι meta και cohort.
* Οι τιμές κατάστασης απενεργοποίησης είναι 1 (απενεργοποιημένο) ή 0 (ενεργοποιημένο).
* Οι φοιτητές που θα εγγραφούν μέσω της μεθόδου θα τοποθετηθούν στην ομάδα που καθορίζεται στο πεδίο όνομα ομάδας.
   Η ομάδα θα δημιουργηθεί αν δεν υπάρχει ήδη.';

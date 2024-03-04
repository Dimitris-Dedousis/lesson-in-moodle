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
 * Strings for component 'tool_uploadblocksettings', language 'el', version '4.3'.
 *
 * @package     tool_uploadblocksettings
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockadded'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Το μπλοκ «{$a->blocktitle}» ({$a->blockname}) προστέθηκε στο μάθημα «{$a->coursename}» ({$a->courseid}).';
$string['blockadderror'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Σφάλμα: Το μπλοκ «{$a->blocktitle}» ({$a->blockname}) δεν προτέθηκε στο μάθημα «{$a->coursename}» ({$a->courseid}). {$a->skipped}.';
$string['blockalreadyadded'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Το μπλοκ «{$a->blocktitle}» ({$a->blockname}) προστέθηκε ήδη στο μάθημα «{$a->coursename}» ({$a->courseid}). {$a->skipped}.';
$string['blockdeleted'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Το μπλοκ «{$a->blocktitle}» ({$a->blockname}) διαγράφηκαν από το μάθημα {$a->coursename}" ({$a->courseid}).';
$string['blockdoesntexist'] = '{$a->line} {$a->linenum} [{$a->oplabel}]: Το μπλοκ «{$a->blocktitle}» ({$a->blockname}) δεν προστέθηκε στο μάθημα «{$a->coursename}» ({$a->courseid}). {$a->skipped}.';
$string['csvfile'] = '';
$string['heading'] = 'Ανεβάστε τις ρυθμίσεις μπλοκ μαθήματος από ένα αρχείο CSV';
$string['operationunknown'] = '{$a->line} {$a->linenum} [{$a->op}]: Άγνωστη λειτουργία.';
$string['pluginname'] = 'Ανέβασμα ρυθμίσεων μπλοκ';

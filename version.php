<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

// Only when master becomes a stable the version value will be changed for
// the current date. Otherwise we just increase the last NN by one.

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'mod_journal';
$plugin->version  = 2020090700;
$plugin->requires = 2020060900;  /* Moodle 3.9 */
$plugin->release = '2.0.1 (Build: 2019061600)';
$plugin->maturity = MATURITY_STABLE;
$plugin->cron     = 60;

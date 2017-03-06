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

/**
 * This file contains main class for the course format Topic
 *
 * @since     Moodle 2.0
 * @package   format_topics
 * @copyright 2009 Sam Hemelryk
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
require_once($CFG->dirroot. '/course/format/lib.php');
require_once($CFG->dirroot. '/course/format/topics/lib.php');


class format_ffhs extends format_topics {
  /**
   * Definitions of the additional options that this course format uses for course
   *
   * Topics format uses the following options:
   * - coursedisplay
   * - numsections
   * - hiddensections
   *
   * @param bool $foreditform
   * @return array of options
   */
  public function course_format_options($foreditform = false){


    $cfo= parent::course_format_options($foreditform);
    $cfo['roomname'] = array(
                      'default' => '',
                      'type' => PARAM_TEXT,
                          'label' => new lang_string('roomname', 'format_ffhs'),
                          'help' => 'roomname',
                          'help_component' => 'format_ffhs',
              );
    var_dump($cfo);
    return $cfo;
  }
}

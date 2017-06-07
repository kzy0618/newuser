/**
 * ownCloud - newuser
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Daugieras <adau828@aucklanduni.ac.nz>
 * @copyright Daugieras 2017
 */

(function ($, OC) {

	$(document).ready(function () {
		$('#commun').click(function () {
			$('#text').removeClass('hidden');
			$('#text2').addClass('hidden');
		});

                $('#researcher').click(function () {
                        $('#text2').removeClass('hidden');
                        $('#text').addClass('hidden');
                });

	});

})(jQuery, OC);

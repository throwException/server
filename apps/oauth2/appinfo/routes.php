<?php
/**
 * @copyright Copyright (c) 2017 Lukas Reschke <lukas@statuscode.ch>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

return [
	'routes' => [
		[
			'name' => 'Settings#addClient',
			'url' => '/clients',
			'verb' => 'POST',
		],
		[
			'name' => 'Settings#getClients',
			'url' => '/clients',
			'verb' => 'GET',
		],
		[
			'name' => 'Settings#deleteClient',
			'url' => '/clients/{id}',
			'verb' => 'DELETE'
		],
		[
			'name' => 'LoginRedirector#authorize',
			'url' => '/authorize',
			'verb' => 'GET',
		],
		[
			'name' => 'OauthApi#getToken',
			'url' => '/api/v1/token',
			'verb' => 'POST'
		],
		[
			'name' => 'OauthApi#getUserinfo',
			'url' => '/api/v1/userinfo',
			'verb' => 'GET'
		],
		[
			'name' => 'OauthApi#getGroupinfo',
			'url' => '/api/v1/groupinfo',
			'verb' => 'GET'
		],
	],
];

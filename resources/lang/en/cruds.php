<?php
	
	return [
		'permission' => [
			'title' => 'Permissions',
			'title_singular' => 'Permission',
			'fields' => [
				'id' => 'ID',
				'id_helper' => '',
				'title' => 'Title',
				'title_helper' => '',
				'created_at' => 'Created at',
				'created_at_helper' => '',
				'updated_at' => 'Updated at',
				'updated_at_helper' => '',
				'deleted_at' => 'Deleted at',
				'deleted_at_helper' => '',
			],
		],
		'role' => [
			'title' => 'Roles',
			'title_singular' => 'Role',
			'fields' => [
				'id' => 'ID',
				'id_helper' => '',
				'title' => 'Title',
				'title_helper' => '',
				'permissions' => 'Permissions',
				'permissions_helper' => '',
				'created_at' => 'Created at',
				'created_at_helper' => '',
				'updated_at' => 'Updated at',
				'updated_at_helper' => '',
				'deleted_at' => 'Deleted at',
				'deleted_at_helper' => '',
			],
		],
		'userManagement' => [
			'title' => 'User Management',
			'title_singular' => 'User Management',
		],
		'user' => [
			'title' => 'Users',
			'title_singular' => 'User',
			'fields' => [
				'id' => 'ID',
				'id_helper' => '',
				'name' => 'Name',
				'name_helper' => '',
				'email' => 'Email',
				'email_helper' => '',
				'email_verified_at' => 'Email verified at',
				'email_verified_at_helper' => '',
				'password' => 'Password',
				'password_helper' => '',
				'roles' => 'Roles',
				'roles_helper' => '',
				'remember_token' => 'Remember Token',
				'remember_token_helper' => '',
				'created_at' => 'Created at',
				'created_at_helper' => '',
				'updated_at' => 'Updated at',
				'updated_at_helper' => '',
				'deleted_at' => 'Deleted at',
				'deleted_at_helper' => '',
			],
		],
		'organizationManagement' => [
			'title' => 'Organization',
			'title_singular' => 'Organization management',
		],
		'organization' => [
			'title' => 'Organization',
			'title_singular' => 'Organization',
			'fields' => [
				'id' => 'ID',
				'id_helper' => '',
				'created_at' => 'Created at',
				'created_at_helper' => '',
				'updated_at' => 'Updated at',
				'updated_at_helper' => '',
				'deleted_at' => 'Deleted at',
				'deleted_at_helper' => '',
			],
		],
		'about' => [
			'title' => "About",
			"title_singular" => "About",
			'fields' => [
				'id' => 'ID',
				'id_helper' => '',
				'created_at' => 'Created at',
				'created_at_helper' => '',
				'updated_at' => 'Updated at',
				'updated_at_helper' => '',
				'deleted_at' => 'Deleted at',
				'deleted_at_helper' => '',
			],
		],
		'sliderManagement' => [
			'title' => 'Slider',
			'title_singular' => 'Slider Management'
		],
		'slider' => [
			'title' => 'Slider',
			'title_singular' => 'Slider',
			'fields' => [
				'id' => 'ID',
				'id_helper' => '',
				'title' => 'Title',
				'title_helper' => '',
				'created_at' => 'Created at',
				'created_at_helper' => '',
				'updated_at' => 'Updated at',
				'updated_at_helper' => '',
				'deleted_at' => 'Deleted at',
				'deleted_at_helper' => '',
			]
		],
		'blog' => [
			'title' => 'Blog',
			'title_singular' => 'Blog',
			'fields' => [
				'id' => 'ID',
				'id_helper' => '',
				'title' => 'Blog Title',
				'author' => 'Blog Author',
				'description' => 'Blog Description',
				'title_helper' => '',
				'created_at' => 'Created at',
				'created_at_helper' => '',
				'updated_at' => 'Updated at',
				'updated_at_helper' => '',
				'deleted_at' => 'Deleted at',
				'deleted_at_helper' => '',
			]
		],
		'teamsManagement' => [
			'title' => "Team",
			'title_singular' => "Team Management"
		],
		'team' => [
			'title' => 'Team',
			'title_singular' => "Team",
			'fields' => [
				'id' => 'ID',
				'id_helper' => '',
				'title' => 'Title',
				'title_helper' => '',
				'name' => 'Name',
				'name_helper' => '',
				'address' => 'Address',
				'address_helper' => '',
				'phone_number' => 'Phone Number',
				'position' => 'Position',
				'created_at' => 'Created at',
				'created_at_helper' => '',
				'updated_at' => 'Updated at',
				'updated_at_helper' => '',
				'deleted_at' => 'Deleted at',
				'deleted_at_helper' => '',
			]
		],
		'partner' => [
			'title' => 'Partner',
			'title_singular' => 'Partner',
			'fields' => [
				'id' => 'ID',
				'id_helper' => '',
				'title' => 'Title',
				'title_helper' => '',
				'name' => 'Name',
				'name_helper' => '',
				'image' => 'Image',
				'link' => 'Link',
				'created_at' => 'Created at',
				'created_at_helper' => '',
				'updated_at' => 'Updated at',
				'updated_at_helper' => '',
				'deleted_at' => 'Deleted at',
				'deleted_at_helper' => '',
			]
		]
	];

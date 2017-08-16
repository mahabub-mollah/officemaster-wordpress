(function() {
	tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
		editor.addButton('my_mce_button', {
			text: 'ebit',
			icon: false,
			onclick: function() {
				editor.insertContent('[slider]');
			}
		});
	});
	tinymce.PluginManager.add('my_mce_button1', function( editor, url ) {
		editor.addButton('my_mce_button1', {
			text: 'Mahbub',
			icon: false,
			type:'menubutton',
			menu:[
			{
                text:'Menu first',
                onclick: function() {
				editor.insertContent('[services]');
			}
			},
			{
                text:'Menu second',
                menu:[
                {


                	text:'submenu1',
                },
                {


                	text:'submenu2',
                }




                ]
			},

			{
                text:'Menu third',
                	onclick: function() {
								editor.windowManager.open( {
									title: 'Insert Random Shortcode',
									body: [
										{
											type: 'textbox',
											name: 'firstname',
											label: 'Text Box',
											value: 'Mahbub'
										},
										{
											type: 'textbox',
											name: 'address',
											label: 'address',
										
											multiline: true,
											minWidth: 300,
											minHeight: 100
										},
										{
											type: 'listbox',
											name: 'selectsex',
											label: 'select sex',
											'values': [
												{text: 'male', value: 'male'},
												{text: 'female', value: 'female'}
												
											]
										}
									],
									onsubmit: function( x ) {
										editor.insertContent( '[ebit name="'+ x.data.firstname +'" address="'+ x.data.address +'" sex="'+ x.data.selectsex +'"]');
									}
								});
			}
		}

     ]


			
		});
	});
})();


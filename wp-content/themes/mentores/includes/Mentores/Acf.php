<?php

/**
 * A idéia desta classe é apenas ela possuir configurações relacionadas ao Advanced Custom Fields.
 * Demais configurações do tema devem ser feitas em suas respectivas classes.
 */

class MentoresAcf
{
	public function __construct()
	{
		add_action('admin_menu',		array('MentoresAcf', 'createOptionsPage'));
		// add_action('acf/init',			array('MentoresAcf', 'createBannersConfig'));
		add_action('acf/init',			array('MentoresAcf', 'createThemeConfig'));
		// add_action('acf/init',			array('MentoresAcf', 'createHomeBlogConfig'));
		// add_action('acf/init',			array('MentoresAcf', 'createHomeWoocommerceConfig'));
	}

	// Criar páginas de opção para o Tema
	public static function createOptionsPage()
	{
		if( function_exists('acf_add_options_page') ) {

			// Página de Opções
			$parent = acf_add_options_page(array(
				'page_title' 	=> 'Opções',
				'menu_title' 	=> 'Opções',
				'menu_slug' 	=> 'options',
				'redirect'  => false,
				'position' => '2.3'
			));

		}
	}

	// Estrutura Woocommerce na Home
	public static function createHomeWoocommerceConfig()
	{
		if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5bbcff3736944',
			'title' => 'Estrutura Home Woocommerce',
			'fields' => array(
				array(
					'key' => 'field_5bbdefd61c697',
					'label' => 'Listagem',
					'name' => 'listagem',
					'type' => 'flexible_content',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layouts' => array(
						'5bbdf0fb8e641' => array(
							'key' => '5bbdf0fb8e641',
							'name' => 'produtos_novidades',
							'label' => 'Produtos Novidades',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5bbdf1451c699',
									'label' => 'Título da Sessão',
									'name' => 'titulo_da_sessao',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5bbdf1731c69a',
									'label' => 'Tipo de Listagem',
									'name' => 'tipo_de_listagem',
									'type' => 'select',
									'instructions' => 'Caso opte por usar sem Carousel, a exibição da listagem no mobile terá uma layout diferente.',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'Sem Carousel' => 'Sem Carousel',
										'Com Carousel' => 'Com Carousel',
									),
									'default_value' => array(
										0 => 'Com Carousel',
									),
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'ajax' => 0,
									'placeholder' => '',
								),
								array(
									'key' => 'field_5bbdf1b31c69b',
									'label' => 'Quantidade de Itens',
									'name' => 'quantidade_de_itens',
									'type' => 'number',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbdf1731c69a',
												'operator' => '==',
												'value' => 'Com Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'default_value' => 4,
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => 4,
									'max' => '',
									'step' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
						'layout_5bbe0185f4772' => array(
							'key' => 'layout_5bbe0185f4772',
							'name' => 'mais_vendidos',
							'label' => 'Mais Vendidos',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5bbe0192f4773',
									'label' => 'Título da Sessão',
									'name' => 'titulo_da_sessao',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5bbe019ff4775',
									'label' => 'Tipo de Listagem',
									'name' => 'tipo_de_listagem',
									'type' => 'select',
									'instructions' => 'Caso opte por usar sem Carousel, a exibição da listagem no mobile terá uma layout diferente.',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'Sem Carousel' => 'Sem Carousel',
										'Com Carousel' => 'Com Carousel',
									),
									'default_value' => array(
										0 => 'Com Carousel',
									),
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'ajax' => 0,
									'placeholder' => '',
								),
								array(
									'key' => 'field_5bbe01b1f4776',
									'label' => 'Quantidade de Itens',
									'name' => 'quantidade_de_itens',
									'type' => 'number',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbe019ff4775',
												'operator' => '==',
												'value' => 'Com Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'default_value' => 4,
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => 4,
									'max' => '',
									'step' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
						'layout_5bbe0a75a6a5f' => array(
							'key' => 'layout_5bbe0a75a6a5f',
							'name' => 'produtos_em_oferta',
							'label' => 'Produtos em Oferta',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5bbe0b7fa6a60',
									'label' => 'Título da Sessão',
									'name' => 'titulo_da_sessao',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5bbe0ba1a6a61',
									'label' => 'Tipo de Listagem',
									'name' => 'tipo_de_listagem',
									'type' => 'select',
									'instructions' => 'Caso opte por usar sem Carousel, a exibição da listagem no mobile terá uma layout diferente.',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'Sem Carousel' => 'Sem Carousel',
										'Com Carousel' => 'Com Carousel',
									),
									'default_value' => array(
										0 => 'Com Carousel',
									),
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'ajax' => 0,
									'placeholder' => '',
								),
								array(
									'key' => 'field_5bbe0bc2a6a62',
									'label' => 'Quantidade de Itens',
									'name' => 'quantidade_de_itens',
									'type' => 'number',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbe0ba1a6a61',
												'operator' => '==',
												'value' => 'Com Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'default_value' => 4,
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => 4,
									'max' => '',
									'step' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
						'layout_5bbe331ef771a' => array(
							'key' => 'layout_5bbe331ef771a',
							'name' => 'produtos_destacados',
							'label' => 'Produtos Destacados',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5bbe33a1f771b',
									'label' => 'Título da Sessão',
									'name' => 'titulo_da_sessao',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5bbe33b5f771c',
									'label' => 'Tipo de Listagem',
									'name' => 'tipo_de_listagem',
									'type' => 'select',
									'instructions' => 'Caso opte por usar sem Carousel, a exibição da listagem no mobile terá uma layout diferente.',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'Sem Carousel' => 'Sem Carousel',
										'Com Carousel' => 'Com Carousel',
									),
									'default_value' => array(
										0 => 'Com Carousel',
									),
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'ajax' => 0,
									'placeholder' => '',
								),
								array(
									'key' => 'field_5bbe33c4f771d',
									'label' => 'Quantidade de Itens',
									'name' => 'quantidade_de_itens',
									'type' => 'number',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbe33b5f771c',
												'operator' => '==',
												'value' => 'Com Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'default_value' => 4,
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => 4,
									'max' => '',
									'step' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
						'layout_5bbe39250beca' => array(
							'key' => 'layout_5bbe39250beca',
							'name' => 'categoria_selecionada',
							'label' => 'Categoria Selecionada',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5bbe39390becb',
									'label' => 'Título da Sessão',
									'name' => 'titulo_da_sessao',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5bbe39d60becf',
									'label' => 'Categoria Selecionada',
									'name' => 'categoria_selecionada',
									'type' => 'taxonomy',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'taxonomy' => 'product_cat',
									'field_type' => 'select',
									'allow_null' => 0,
									'add_term' => 0,
									'save_terms' => 0,
									'load_terms' => 0,
									'return_format' => 'id',
									'multiple' => 0,
								),
								array(
									'key' => 'field_5bbe39780becc',
									'label' => 'Tipo de Listagem',
									'name' => 'tipo_de_listagem',
									'type' => 'select',
									'instructions' => 'Caso opte por usar sem Carousel, a exibição da listagem no mobile terá uma layout diferente.',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'Sem Carousel' => 'Sem Carousel',
										'Com Carousel' => 'Com Carousel',
									),
									'default_value' => array(
										0 => 'Com Carousel',
									),
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'ajax' => 0,
									'placeholder' => '',
								),
								array(
									'key' => 'field_5bbe39850becd',
									'label' => 'Quantidade de Itens',
									'name' => 'quantidade_de_itens',
									'type' => 'number',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbe39780becc',
												'operator' => '==',
												'value' => 'Com Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'default_value' => 4,
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => 4,
									'max' => '',
									'step' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
						'layout_5bbe42717b51b' => array(
							'key' => 'layout_5bbe42717b51b',
							'name' => 'produtos_especificos',
							'label' => 'Produtos Específicos',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5bbe42947b51c',
									'label' => 'Título da Sessão',
									'name' => 'titulo_da_sessao',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5bbe43307b51f',
									'label' => 'Produtos',
									'name' => 'produtos_carousel',
									'type' => 'relationship',
									'instructions' => '',
									'required' => 1,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbe42aa7b51d',
												'operator' => '==',
												'value' => 'Com Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'post_type' => array(
										0 => 'product',
									),
									'taxonomy' => '',
									'filters' => '',
									'elements' => '',
									'min' => '',
									'max' => '',
									'return_format' => 'id',
								),
								array(
									'key' => 'field_5bbe44447b520',
									'label' => 'Produtos',
									'name' => 'produtos_sem_carousel',
									'type' => 'relationship',
									'instructions' => '',
									'required' => 1,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbe42aa7b51d',
												'operator' => '==',
												'value' => 'Sem Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'post_type' => array(
										0 => 'product',
									),
									'taxonomy' => '',
									'filters' => '',
									'elements' => '',
									'min' => 1,
									'max' => 4,
									'return_format' => 'id',
								),
								array(
									'key' => 'field_5bbe42aa7b51d',
									'label' => 'Tipo de Listagem',
									'name' => 'tipo_de_listagem',
									'type' => 'select',
									'instructions' => 'Caso opte por usar sem Carousel, a exibição da listagem no mobile terá uma layout diferente.',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '50',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'Sem Carousel' => 'Sem Carousel',
										'Com Carousel' => 'Com Carousel',
									),
									'default_value' => array(
										0 => 'Com Carousel',
									),
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'ajax' => 0,
									'placeholder' => '',
								),
								array(
									'key' => 'field_5bbe42c37b51e',
									'label' => 'Quantidade de Itens',
									'name' => 'quantidade_de_itens',
									'type' => 'number',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbe42aa7b51d',
												'operator' => '==',
												'value' => 'Com Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '50',
										'class' => '',
										'id' => '',
									),
									'default_value' => 4,
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => 4,
									'max' => '',
									'step' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
						'layout_5bbe6002ddcdb' => array(
							'key' => 'layout_5bbe6002ddcdb',
							'name' => 'categorias_produto',
							'label' => 'Categorias Produto',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5bbe6013ddcdc',
									'label' => 'Título da Sessão',
									'name' => 'titulo_da_sessao',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5bbe6180ddcdd',
									'label' => 'Quantidade',
									'name' => 'quantidade',
									'type' => 'number',
									'instructions' => '',
									'required' => 1,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => 1,
									'max' => '',
									'step' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
					),
					'button_label' => 'Adicionar',
					'min' => '',
					'max' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-home',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));

		endif;
	}

	// Estrutura Blog na Home
	public static function createHomeBlogConfig()
	{
		if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5bbe4fc628b64',
			'title' => 'Estrutura Home Blog',
			'fields' => array(
				array(
					'key' => 'field_5bbe515cc38c2',
					'label' => 'Listagem',
					'name' => 'listagem_blog',
					'type' => 'flexible_content',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layouts' => array(
						'5bbe51726424c' => array(
							'key' => '5bbe51726424c',
							'name' => 'ultimos_posts',
							'label' => 'Últimos Posts',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5bbe51adc38c3',
									'label' => 'Título da Sessão',
									'name' => 'titulo_da_sessao',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5bbe51b5c38c4',
									'label' => 'Tipo de Listagem',
									'name' => 'tipo_de_listagem',
									'type' => 'select',
									'instructions' => 'Caso opte por usar sem Carousel, a exibição da listagem no mobile terá uma layout diferente.',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'Sem Carousel' => 'Sem Carousel',
										'Com Carousel' => 'Com Carousel',
									),
									'default_value' => array(
										0 => 'Com Carousel',
									),
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'ajax' => 0,
									'placeholder' => '',
								),
								array(
									'key' => 'field_5bbe5240c38c5',
									'label' => 'Quantidade de Itens',
									'name' => 'quantidade_de_itens',
									'type' => 'number',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbe51b5c38c4',
												'operator' => '==',
												'value' => 'Com Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'default_value' => 4,
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => 4,
									'max' => '',
									'step' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
						'layout_5bbe57df5a660' => array(
							'key' => 'layout_5bbe57df5a660',
							'name' => 'por_categoria',
							'label' => 'Por Categoria',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'field_5bbe57f05a661',
									'label' => 'Título da Sessão',
									'name' => 'titulo_da_sessao',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5bbe58af00775',
									'label' => 'Categoria Selecionada',
									'name' => 'categoria_selecionada',
									'type' => 'taxonomy',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'taxonomy' => 'category',
									'field_type' => 'select',
									'allow_null' => 0,
									'add_term' => 0,
									'save_terms' => 0,
									'load_terms' => 0,
									'return_format' => 'id',
									'multiple' => 0,
								),
								array(
									'key' => 'field_5bbe58025a662',
									'label' => 'Tipo de Listagem',
									'name' => 'tipo_de_listagem',
									'type' => 'select',
									'instructions' => 'Caso opte por usar sem Carousel, a exibição da listagem no mobile terá uma layout diferente.',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'choices' => array(
										'Sem Carousel' => 'Sem Carousel',
										'Com Carousel' => 'Com Carousel',
									),
									'default_value' => array(
										0 => 'Com Carousel',
									),
									'allow_null' => 0,
									'multiple' => 0,
									'ui' => 0,
									'return_format' => 'value',
									'ajax' => 0,
									'placeholder' => '',
								),
								array(
									'key' => 'field_5bbe580f5a663',
									'label' => 'Quantidade de Itens',
									'name' => 'quantidade_de_itens',
									'type' => 'number',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array(
										array(
											array(
												'field' => 'field_5bbe58025a662',
												'operator' => '==',
												'value' => 'Com Carousel',
											),
										),
									),
									'wrapper' => array(
										'width' => '33',
										'class' => '',
										'id' => '',
									),
									'default_value' => 4,
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'min' => 4,
									'max' => '',
									'step' => '',
								),
							),
							'min' => '',
							'max' => '',
						),
					),
					'button_label' => 'Adicionar',
					'min' => '',
					'max' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-home',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));

		endif;
	}

	// Configurações do Tema
	public static function createThemeConfig()
	{
		if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5bb67694055c7',
			'title' => 'Configurações do Tema',
			'fields' => array(
				array(
					'key' => 'field_5bb676fb49f80',
					'label' => 'Informações da Empresa',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_5bb677c649f81',
					'label' => 'Logotipo',
					'name' => 'logotipo',
					'type' => 'image',
					'instructions' => 'Esta é a logo do seu site',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5bb677df49f82',
					'label' => 'Favicon',
					'name' => 'favicon',
					'type' => 'image',
					'instructions' => 'Este é o ícone que aparece na aba do navegador quando alguém acessa o seu site',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5bbcebe0cf394',
					'label' => 'Redes Sociais',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_5bbcec6ccf395',
					'label' => 'Redes Social',
					'name' => 'redes_social',
					'type' => 'repeater',
					'instructions' => 'Aqui você pode cadastrar as redes sociais do seu site, caso necessite de uma que não está listada aqui, contate a Mentores.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 7,
					'layout' => 'table',
					'button_label' => '',
					'sub_fields' => array(
						array(
							'key' => 'field_5bbcecd8cf396',
							'label' => 'Qual Rede?',
							'name' => 'qual_rede',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '30',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'facebook-f' => 'Facebook',
								'instagram' => 'Instagram',
								'linkedin-in' => 'Linkedin',
								'youtube' => 'YouTube',
								'google-plus-g' => 'Google Plus',
								'twitter' => 'Twitter',
								'pinterest-p' => 'Pinterest',
							),
							'default_value' => array(
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'return_format' => 'value',
							'ajax' => 0,
							'placeholder' => '',
						),
						array(
							'key' => 'field_5bbcedd7b1dbe',
							'label' => 'URL',
							'name' => 'url',
							'type' => 'url',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '70',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'options',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => 1,
			'description' => '',
		));

		endif;
	}

	// Configuração para Banners
	public static function createBannersConfig()
	{
		if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_5bb7a68d2857f',
			'title' => 'Banner',
			'fields' => array(
				array(
					'key' => 'field_5bb7a6bc1d6da',
					'label' => 'Desktop',
					'name' => '',
					'type' => 'message',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'As configurações abaixo são referentes ao banner na versão desktop',
					'new_lines' => 'wpautop',
					'esc_html' => 0,
				),
				array(
					'key' => 'field_5bb7a8481d6db',
					'label' => 'Tipo de Banner',
					'name' => 'tipo_de_banner',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'Imagem' => 'Imagem',
						'Vídeo' => 'Vídeo',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => 'Imagem',
					'layout' => 'horizontal',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key' => 'field_5bb7adcec6a65',
					'label' => 'Imagem do Banner',
					'name' => 'imagem_do_banner',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bb7a8481d6db',
								'operator' => '==',
								'value' => 'Imagem',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5bb7a95b59e7c',
					'label' => 'Título do Banner',
					'name' => 'titulo_do_banner',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bb7a8481d6db',
								'operator' => '==',
								'value' => 'Imagem',
							),
						),
					),
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5bb7a9c14ed6a',
					'label' => 'Alinhamento do Título',
					'name' => 'alinhamento_do_titulo',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bb7a8481d6db',
								'operator' => '==',
								'value' => 'Imagem',
							),
						),
					),
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'left' => 'Esquerda',
						'center' => 'Centralizado',
						'right' => 'Direita',
					),
					'default_value' => array(
						0 => 'Esquerda',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_5bb7ab253fdf7',
					'label' => 'Cor do Texto',
					'name' => 'cor_do_texto',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bb7a8481d6db',
								'operator' => '==',
								'value' => 'Imagem',
							),
						),
					),
					'wrapper' => array(
						'width' => '33',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'black' => 'Preto',
						'white' => 'Branco',
					),
					'default_value' => array(
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
				array(
					'key' => 'field_5bb7acc52cb2f',
					'label' => 'Texto Botão',
					'name' => 'texto_botao',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bb7a8481d6db',
								'operator' => '==',
								'value' => 'Imagem',
							),
						),
					),
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5bb7ad0d2cb30',
					'label' => 'URL do Botão',
					'name' => 'url_do_botao',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bb7a8481d6db',
								'operator' => '==',
								'value' => 'Imagem',
							),
						),
					),
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5bb7bc4df31cf',
					'label' => 'Video',
					'name' => 'video',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bb7a8481d6db',
								'operator' => '==',
								'value' => 'Vídeo',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5bb7c23cc5dfd',
					'label' => 'Mobile',
					'name' => '',
					'type' => 'message',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bb7a8481d6db',
								'operator' => '==',
								'value' => 'Imagem',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'As configurações abaixo são referentes ao banner na versão mobile',
					'new_lines' => 'wpautop',
					'esc_html' => 0,
				),
				array(
					'key' => 'field_5bb7c25ac5dfe',
					'label' => 'Imagem do Banner Mobile',
					'name' => 'imagem_do_banner_mobile',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bb7a8481d6db',
								'operator' => '==',
								'value' => 'Imagem',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'banners',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'slug',
				7 => 'author',
				8 => 'format',
				9 => 'page_attributes',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
			'active' => 1,
			'description' => '',
		));

		endif;
	}

}
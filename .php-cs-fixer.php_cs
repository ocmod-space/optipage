<?php

declare(strict_types=1);

/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:3.2.1|configurator
 * you can change this configuration by importing this file.
 */

$config = new PhpCsFixer\Config();

return $config
	->setIndent("\t")
	->setLineEnding("\n")
	->setRiskyAllowed(true)
	->setRules([
		'@PSR2'                                         => true,
		'@Symfony'                                      => false,
		// '@PER-CS2.0'                                       => true,
		'@DoctrineAnnotation'                           => true,
		'@PHPUnit100Migration:risky'                    => true,
		'@PHP74Migration'                               => true,
		'@PHP74Migration:risky'                         => true,
		'align_multiline_comment'                       => true,
		'array_indentation'                             => true,
		'array_syntax'                                  => ['syntax' => 'short'],
		'assign_null_coalescing_to_coalesce_equal'      => true,
		'attribute_empty_parentheses'                   => true,
		'backtick_to_shell_exec'                        => true,
		'binary_operator_spaces'                        => [
			'default'   => 'single_space',
			'operators' => [
				'=>' => 'align_single_space_minimal_by_scope',
				'='  => 'at_least_single_space',
			],
		],
		// /*
		'blank_line_after_namespace'                    => true,
		'blank_line_after_opening_tag'                  => true,
		'blank_line_before_statement'                   => [
			'statements' => [
				'break',
				'case',
				'continue',
				'declare',
				'default',
				'exit',
				'goto',
				'return',
				'switch',
				'throw',
				'try',
				'while',
			],
		],
		'cast_spaces'                                   => ['space' => 'none'],
		'class_attributes_separation'                   => ['elements' => ['method' => 'one']],
		'class_definition'                              => ['single_line' => true],
		'class_reference_name_casing'                   => true,
		'clean_namespace'                               => true,
		'comment_to_phpdoc'                             => true,
		'compact_nullable_typehint'                     => true,
		'concat_space'                                  => ['spacing' => 'one'],
		'constant_case'                                 => true,
		'control_structure_braces'                      => false,
		'control_structure_continuation_position'       => ['position' => 'same_line'],
		'curly_braces_position'                         => [
			'allow_single_line_anonymous_functions'     => true,
			'allow_single_line_empty_anonymous_classes' => true,
			'classes_opening_brace'                     => 'same_line',
			'control_structures_opening_brace'          => 'same_line',
			'functions_opening_brace'                   => 'same_line',
		],
		'declare_parentheses'                           => true,
		//'dir_constant'                                     => true,
		'declare_equal_normalize'                       => true,
		'echo_tag_syntax'                               => true,
		'elseif'                                        => true,
		'empty_loop_body'                               => true,
		'empty_loop_condition'                          => true,
		'encoding'                                      => true,
		'escape_implicit_backslashes'                   => false,  //true
		'explicit_indirect_variable'                    => true,
		'explicit_string_variable'                      => true,
		'full_opening_tag'                              => true,
		'fully_qualified_strict_types'                  => true,
		'function_declaration'                          => ['closure_function_spacing' => 'none'],
		'function_to_constant'                          => true,
		'function_typehint_space'                       => true,
		'general_phpdoc_tag_rename'                     => ['replacements' => ['inheritDocs' => 'inheritDoc']],
		'heredoc_indentation'                           => true,
		'heredoc_to_nowdoc'                             => true,
		'include'                                       => false,
		'indentation_type'                              => true,
		'integer_literal_case'                          => true,
		'lambda_not_used_import'                        => true,
		'line_ending'                                   => true,
		'linebreak_after_opening_tag'                   => true,
		'lowercase_cast'                                => true,
		'lowercase_keywords'                            => true,
		'lowercase_static_reference'                    => true,
		'magic_constant_casing'                         => true,
		'magic_method_casing'                           => true,
		'method_argument_space'                         => [
			'on_multiline' => 'ignore',
		],
		'method_chaining_indentation'                   => true,
		'multiline_comment_opening_closing'             => true,
		'multiline_whitespace_before_semicolons'        => ['strategy' => 'new_line_for_chained_calls'],
		'native_function_casing'                        => true,
		'native_function_type_declaration_casing'       => true,
		'new_with_braces'                               => true,
		'no_alias_language_construct_call'              => true,
		'no_alternative_syntax'                         => true,
		'no_binary_string'                              => true,
		'no_blank_lines_after_class_opening'            => true,
		'no_blank_lines_after_phpdoc'                   => true,
		'no_break_comment'                              => true,
		'no_closing_tag'                                => true,
		'no_empty_comment'                              => true,
		'no_empty_phpdoc'                               => true,
		'no_empty_statement'                            => true,
		'no_extra_blank_lines'                          => [
			'tokens' => [
				'case',
				'curly_brace_block',
				'default',
				'extra',
				'parenthesis_brace_block',
				'square_brace_block',
				'switch',
				'throw',
				'use'
			]
		],
		'no_leading_import_slash'                       => true,
		'no_leading_namespace_whitespace'               => true,
		'no_mixed_echo_print'                           => true,
		'no_multiple_statements_per_line'               => true,
		'no_multiline_whitespace_around_double_arrow'   => true,
		'no_null_property_initialization'               => true,
		'no_short_bool_cast'                            => true,
		'no_singleline_whitespace_before_semicolons'    => true,
		'no_space_around_double_colon'                  => true,
		'no_spaces_after_function_name'                 => true,
		'no_spaces_around_offset'                       => true,
		'no_superfluous_elseif'                         => false,
		'no_trailing_comma_in_list_call'                => true,
		'no_trailing_comma_in_singleline'               => true,
		'no_trailing_whitespace'                        => true,
		'no_trailing_whitespace_in_comment'             => true,
		'no_unneeded_control_parentheses'               => [
			'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield', 'yield_from']
		],
		'no_unneeded_curly_braces'                      => ['namespaces' => true],
		'no_unset_cast'                                 => true,
		'no_unused_imports'                             => true,
		'no_useless_else'                               => false,
		'no_useless_return'                             => true,
		'no_whitespace_before_comma_in_array'           => true,
		'no_whitespace_in_blank_line'                   => true,
		'normalize_index_brace'                         => true,
		'not_operator_with_space'                       => false,
		'object_operator_without_whitespace'            => true,
		'operator_linebreak'                            => ['only_booleans' => true],
		'ordered_imports'                               => true,
		'php_unit_fqcn_annotation'                      => true,
		'php_unit_internal_class'                       => true,
		'php_unit_method_casing'                        => true,
		'php_unit_test_class_requires_covers'           => true,
		'phpdoc_add_missing_param_annotation'           => true,
		'phpdoc_align'                                  => true,
		'phpdoc_annotation_without_dot'                 => true,
		'phpdoc_indent'                                 => true,
		'phpdoc_inline_tag_normalizer'                  => true,
		'phpdoc_no_access'                              => true,
		'phpdoc_no_alias_tag'                           => true,
		'phpdoc_no_empty_return'                        => false,
		'phpdoc_no_package'                             => false,
		'phpdoc_no_useless_inheritdoc'                  => true,
		'phpdoc_order'                                  => true,
		'phpdoc_order_by_value'                         => true,
		'phpdoc_return_self_reference'                  => true,
		'phpdoc_scalar'                                 => true,
		'phpdoc_separation'                             => true,
		'phpdoc_single_line_var_spacing'                => true,
		'phpdoc_summary'                                => true,
		'phpdoc_tag_type'                               => ['tags' => ['inheritDoc' => 'inline']],
		'phpdoc_to_comment'                             => true,
		'phpdoc_trim'                                   => true,
		'phpdoc_trim_consecutive_blank_line_separation' => true,
		'phpdoc_types'                                  => true,
		'phpdoc_types_order'                            => ['null_adjustment' => 'always_last'],
		'phpdoc_var_annotation_correct_order'           => true,
		'phpdoc_var_without_name'                       => true,
		'protected_to_private'                          => true,
		'return_assignment'                             => true,
		'return_type_declaration'                       => true,
		'semicolon_after_instruction'                   => true,
		'short_scalar_cast'                             => true,
		'simple_to_complex_string_variable'             => true,
		'single_blank_line_at_eof'                      => true,
		'single_blank_line_before_namespace'            => true,
		'single_class_element_per_statement'            => true,
		'single_import_per_statement'                   => true,
		'single_line_after_imports'                     => true,
		'single_line_comment_style'                     => [],
		'single_line_throw'                             => true,

		'single_quote'                                  => false,
		'single_space_after_construct'                  => true,
		'single_trait_insert_per_statement'             => true,
		'space_after_semicolon'                         => ['remove_in_empty_for_expressions' => true],
		'standardize_increment'                         => true,
		'standardize_not_equals'                        => true,
		'statement_indentation'                         => true,
		'switch_case_semicolon_to_colon'                => true,
		'switch_case_space'                             => true,
		'switch_continue_to_break'                      => true,
		'ternary_operator_spaces'                       => true,
		'trailing_comma_in_multiline'                   => false,
		'trim_array_spaces'                             => true,
		'types_spaces'                                  => true,
		'unary_operator_spaces'                         => true,
		'visibility_required'                           => true,
		'whitespace_after_comma_in_array'               => true,
		// */
	])
	->setFinder(
		PhpCsFixer\Finder::create()
			->in(__DIR__)
	)
;

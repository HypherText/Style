<?
namespace HypherText\Style;

use PhpCsFixer\RuleSet\AbstractRuleSetDefinition;

final class HypherTextPhpCsFixerRuleSet extends AbstractRuleSetDefinition
{
    public function getName(): string
    {
        return "@HypherText/Style";
    }

    public function getDescription(): string
    {
        return "Style rules for HypherText projects.";
    }

    public function getRules(): array
    {
        return [
            "@PhpCsFixer" => true,
            "@PhpCsFixer:risky" => true,
            "yield_from_arrays_to_yields" => false,
            "attribute_empty_parentheses" => true,
            "braces_position" => [
                "allow_single_line_anonymous_functions" => true,
                "allow_single_line_empty_anonymous_classes" => true,
                "classes_opening_brace" => "same_line",
                "functions_opening_brace" => "same_line",
            ],
            "no_redundant_readonly_property" => true,
            "ordered_class_elements" => ["order" => ["use_trait"]],
            "phpdoc_readonly_class_comment_to_keyword" => true,
            "protected_to_private" => false,
            "self_accessor" => false,
            "single_class_element_per_statement" => ["elements" => ["property"]],
            "single_trait_insert_per_statement" => false,
            "no_empty_comment" => false,
            "single_line_comment_spacing" => false,
            "single_line_comment_style" => ["comment_types" => ["hash"]],
            "native_constant_invocation" => false,
            "control_structure_braces" => false,
            "empty_loop_body" => ["style" => "braces"],
            "empty_loop_condition" => false,
            "no_alternative_syntax" => ["fix_non_monolithic_code" => false],
            "no_break_comment" => false,
            "no_superfluous_elseif" => false,
            "no_useless_else" => false,
            "simplified_if_return" => true,
            "yoda_style" => ["equal" => false, "identical" => false, "less_and_greater" => false],
            "date_time_create_from_format_call" => true,
            "function_declaration" => ["closure_function_spacing" => "none"],
            "no_unreachable_default_argument_value" => false,
            "no_useless_sprintf" => false,
            "single_line_throw" => false,
            "static_lambda" => false,
            "use_arrow_functions" => true,
            "void_return" => ["fix_lambda" => false],
            "no_unused_imports" => false,
            "blank_lines_before_namespace" => ["min_line_breaks" => 1, "max_line_breaks" => 1],
            "assign_null_coalescing_to_coalesce_equal" => true,
            "no_useless_concat_operator" => false,
            "ternary_to_null_coalescing" => true,
            "blank_line_after_opening_tag" => false,
            "echo_tag_syntax" => ["format" => "short"],
            "full_opening_tag" => false,
            "linebreak_after_opening_tag" => false,
            "single_quote" => false,
            "blank_line_before_statement" => false,
            "blank_line_between_import_groups" => false,
         ];
    }
}

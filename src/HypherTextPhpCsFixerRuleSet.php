<?

namespace HypherText\Style;

use PhpCsFixer\RuleSet\AbstractRuleSetDefinition;

final class HypherTextPhpCsFixerRuleSet extends AbstractRuleSetDefinition
{
    public function getName(): string
    {
        return "@HypherText";
    }

    public function getDescription(): string
    {
        return "Style rules for HypherText projects (short tags, camelCase, colon syntax, etc.).";
    }

    public function getRules(): array
    {
        return [
            "echo_tag_syntax" => [
                "format" => "short",
                "long_function" => "echo",
            ],
            "no_closing_tag" => true,
            "indentation_type" => true,
            "array_syntax" => ["syntax" => "short"],
            "line_ending" => ["ending" => "\n"],
        ];
    }
}

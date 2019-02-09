<?php

class SlackBar
{
    public $column_bg;
    public $menu_bg_hover;
    public $active_item;
    public $active_item_text;
    public $hover_item;
    public $text_color;
    public $active_presence;
    public $mention_badge;

    const SLACK_ORDER = [
        'column_bg',
        'menu_bg_hover',
        'active_item',
        'active_item_text',
        'hover_item',
        'text_color',
        'active_presence',
        'mention_badge'
    ];

    public function getRgb(string $item) : string
    {
        return "#" . $this->decimalToHexColors($this->$item);
    }

    public function __construct(array $pallete)
    {
        $this->parsePallete($pallete);
    }

    public function parsePallete(array $pallete)
    {
        $this->column_bg = $this->popDarkestColor($pallete);
        $this->hover_item = $this->menu_bg_hover = $pallete[1];
        $this->active_item = $pallete[2];
        $this->active_item_text = [255, 255, 255];
        $this->text_color = [255, 255, 255];
        $this->mention_badge = $this->active_presence = $pallete[3];
    }

    public function toSlackString(): string
    {
        $slackSidebarString = "";

        foreach (self::SLACK_ORDER as $key => $color) {
            if ($key !== 0) {
                $slackSidebarString .= ",";
            }

            $slackSidebarString .= "#" . $this->decimalToHexColors($this->$color);
        }


        return $slackSidebarString;
    }

    public function popDarkestColor(&$pallete)
    {
        $brighteness = array_map(function ($color) {
            return $color[0] + $color[1] + $color[2];
        }, $pallete);

        $max_index = array_keys($brighteness, min($brighteness))[0];

        $color = $pallete[$max_index];

        unset($pallete[$max_index]);
        $pallete = array_values($pallete);

        return $color;
    }

    protected function decimalToHexColors(array $colors) : string
    {
        return $this->decimalToHexColor($colors[0]) .
            $this->decimalToHexColor($colors[1]) .
            $this->decimalToHexColor($colors[2]);
    }

    protected function decimalToHexColor(int $color) : string
    {
        return strtoupper(str_pad(dechex($color), 2, "0", STR_PAD_LEFT));
    }
}

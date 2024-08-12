<?php

namespace Esayers\Html;

use Esayers\Html\Elements\EncodedString;
use Esayers\Html\Elements\Tags\A;
use Esayers\Html\Elements\Tags\Abbr;
use Esayers\Html\Elements\Tags\Address;
use Esayers\Html\Elements\Tags\Area;
use Esayers\Html\Elements\Tags\Article;
use Esayers\Html\Elements\Tags\Aside;
use Esayers\Html\Elements\Tags\Audio;
use Esayers\Html\Elements\Tags\B;
use Esayers\Html\Elements\Tags\Base;
use Esayers\Html\Elements\Tags\Bdi;
use Esayers\Html\Elements\Tags\Bdo;
use Esayers\Html\Elements\Tags\Blockquote;
use Esayers\Html\Elements\Tags\Body;
use Esayers\Html\Elements\Tags\Br;
use Esayers\Html\Elements\Tags\Button;
use Esayers\Html\Elements\Tags\Canvas;
use Esayers\Html\Elements\Tags\Caption;
use Esayers\Html\Elements\Tags\Cite;
use Esayers\Html\Elements\Tags\Code;
use Esayers\Html\Elements\Tags\Col;
use Esayers\Html\Elements\Tags\Colgroup;
use Esayers\Html\Elements\Tags\Data;
use Esayers\Html\Elements\Tags\Datalist;
use Esayers\Html\Elements\Tags\Dd;
use Esayers\Html\Elements\Tags\Del;
use Esayers\Html\Elements\Tags\Details;
use Esayers\Html\Elements\Tags\Dfn;
use Esayers\Html\Elements\Tags\Dialog;
use Esayers\Html\Elements\Tags\Div;
use Esayers\Html\Elements\Tags\Dl;
use Esayers\Html\Elements\Tags\Dt;
use Esayers\Html\Elements\Tags\Em;
use Esayers\Html\Elements\Tags\Embed;
use Esayers\Html\Elements\Tags\Fieldset;
use Esayers\Html\Elements\Tags\Figcaption;
use Esayers\Html\Elements\Tags\Figure;
use Esayers\Html\Elements\Tags\Footer;
use Esayers\Html\Elements\Tags\Form;
use Esayers\Html\Elements\Tags\H1;
use Esayers\Html\Elements\Tags\H2;
use Esayers\Html\Elements\Tags\H3;
use Esayers\Html\Elements\Tags\H4;
use Esayers\Html\Elements\Tags\H5;
use Esayers\Html\Elements\Tags\H6;
use Esayers\Html\Elements\Tags\Head;
use Esayers\Html\Elements\Tags\Header;
use Esayers\Html\Elements\Tags\Hgroup;
use Esayers\Html\Elements\Tags\Hr;
use Esayers\Html\Elements\Tags\Html as HtmlTag;
use Esayers\Html\Elements\Tags\I;
use Esayers\Html\Elements\Tags\Iframe;
use Esayers\Html\Elements\Tags\Img;
use Esayers\Html\Elements\Tags\Input;
use Esayers\Html\Elements\Tags\Ins;
use Esayers\Html\Elements\Tags\Kbd;
use Esayers\Html\Elements\Tags\Label;
use Esayers\Html\Elements\Tags\Legend;
use Esayers\Html\Elements\Tags\Li;
use Esayers\Html\Elements\Tags\Link;
use Esayers\Html\Elements\Tags\Main;
use Esayers\Html\Elements\Tags\Map;
use Esayers\Html\Elements\Tags\Mark;
use Esayers\Html\Elements\Tags\Menu;
use Esayers\Html\Elements\Tags\Meta;
use Esayers\Html\Elements\Tags\Meter;
use Esayers\Html\Elements\Tags\Nav;
use Esayers\Html\Elements\Tags\Noscript;
use Esayers\Html\Elements\Tags\Ol;
use Esayers\Html\Elements\Tags\Optgroup;
use Esayers\Html\Elements\Tags\Option;
use Esayers\Html\Elements\Tags\Output;
use Esayers\Html\Elements\Tags\P;
use Esayers\Html\Elements\Tags\Param;
use Esayers\Html\Elements\Tags\Picture;
use Esayers\Html\Elements\Tags\Pre;
use Esayers\Html\Elements\Tags\Progress;
use Esayers\Html\Elements\Tags\Q;
use Esayers\Html\Elements\Tags\Rp;
use Esayers\Html\Elements\Tags\Rt;
use Esayers\Html\Elements\Tags\Ruby;
use Esayers\Html\Elements\Tags\S;
use Esayers\Html\Elements\Tags\Samp;
use Esayers\Html\Elements\Tags\Script;
use Esayers\Html\Elements\Tags\Search;
use Esayers\Html\Elements\Tags\Section;
use Esayers\Html\Elements\Tags\Select;
use Esayers\Html\Elements\Tags\Small;
use Esayers\Html\Elements\Tags\Source;
use Esayers\Html\Elements\Tags\Span;
use Esayers\Html\Elements\Tags\Strike;
use Esayers\Html\Elements\Tags\Strong;
use Esayers\Html\Elements\Tags\Style;
use Esayers\Html\Elements\Tags\Sub;
use Esayers\Html\Elements\Tags\Summary;
use Esayers\Html\Elements\Tags\Sup;
use Esayers\Html\Elements\Tags\Svg;
use Esayers\Html\Elements\Tags\Table;
use Esayers\Html\Elements\Tags\Tbody;
use Esayers\Html\Elements\Tags\Td;
use Esayers\Html\Elements\Tags\Template;
use Esayers\Html\Elements\Tags\Textarea;
use Esayers\Html\Elements\Tags\Tfoot;
use Esayers\Html\Elements\Tags\Th;
use Esayers\Html\Elements\Tags\Thead;
use Esayers\Html\Elements\Tags\Time;
use Esayers\Html\Elements\Tags\Title;
use Esayers\Html\Elements\Tags\Tr;
use Esayers\Html\Elements\Tags\Track;
use Esayers\Html\Elements\Tags\U;
use Esayers\Html\Elements\Tags\Ul;
use Esayers\Html\Elements\Tags\VarTag;
use Esayers\Html\Elements\Tags\Video;
use Esayers\Html\Elements\Tags\Wbr;

/**
 * Static class that provides functions for creating HTML elements
 */
class Html
{
    /**
     * Create new HTML tag: a
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\A
     */
    public static function a(array|Renderable|string $children = [], array $attributes = []) : A {
        $children = self::convertToChildArray($children);
        return new A($children, $attributes);
    }
    
    /**
     * Create new HTML tag: abbr
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Abbr
     */
    public static function abbr(array|Renderable|string $children = [], array $attributes = []) : Abbr {
        $children = self::convertToChildArray($children);
        return new Abbr($children, $attributes);
    }
    
    /**
     * Create new HTML tag: address
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Address
     */
    public static function address(array|Renderable|string $children = [], array $attributes = []) : Address {
        $children = self::convertToChildArray($children);
        return new Address($children, $attributes);
    }
    
    /**
     * Create new HTML tag: area
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Area
     */
    public static function area(array $attributes = []) : Area {
        return new Area($attributes);
    }
    
    /**
     * Create new HTML tag: article
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Article
     */
    public static function article(array|Renderable|string $children = [], array $attributes = []) : Article {
        $children = self::convertToChildArray($children);
        return new Article($children, $attributes);
    }
    
    /**
     * Create new HTML tag: aside
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Aside
     */
    public static function aside(array|Renderable|string $children = [], array $attributes = []) : Aside {
        $children = self::convertToChildArray($children);
        return new Aside($children, $attributes);
    }
    
    /**
     * Create new HTML tag: audio
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Audio
     */
    public static function audio(array|Renderable|string $children = [], array $attributes = []) : Audio {
        $children = self::convertToChildArray($children);
        return new Audio($children, $attributes);
    }
    
    /**
     * Create new HTML tag: b
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\B
     */
    public static function b(array|Renderable|string $children = [], array $attributes = []) : B {
        $children = self::convertToChildArray($children);
        return new B($children, $attributes);
    }
    
    /**
     * Create new HTML tag: base
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Base
     */
    public static function base(array $attributes = []) : Base {
        return new Base($attributes);
    }
    
    /**
     * Create new HTML tag: bdi
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Bdi
     */
    public static function bdi(array|Renderable|string $children = [], array $attributes = []) : Bdi {
        $children = self::convertToChildArray($children);
        return new Bdi($children, $attributes);
    }
    
    /**
     * Create new HTML tag: bdo
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Bdo
     */
    public static function bdo(array|Renderable|string $children = [], array $attributes = []) : Bdo {
        $children = self::convertToChildArray($children);
        return new Bdo($children, $attributes);
    }
    
    /**
     * Create new HTML tag: blockquote
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Blockquote
     */
    public static function blockquote(array|Renderable|string $children = [], array $attributes = []) : Blockquote {
        $children = self::convertToChildArray($children);
        return new Blockquote($children, $attributes);
    }
    
    /**
     * Create new HTML tag: body
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Body
     */
    public static function body(array|Renderable|string $children = [], array $attributes = []) : Body {
        $children = self::convertToChildArray($children);
        return new Body($children, $attributes);
    }
    
    /**
     * Create new HTML tag: br
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Br
     */
    public static function br(array $attributes = []) : Br {
        return new Br($attributes);
    }
    
    /**
     * Create new HTML tag: button
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Button
     */
    public static function button(array|Renderable|string $children = [], array $attributes = []) : Button {
        $children = self::convertToChildArray($children);
        return new Button($children, $attributes);
    }
    
    /**
     * Create new HTML tag: canvas
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Canvas
     */
    public static function canvas(array|Renderable|string $children = [], array $attributes = []) : Canvas {
        $children = self::convertToChildArray($children);
        return new Canvas($children, $attributes);
    }
    
    /**
     * Create new HTML tag: caption
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Caption
     */
    public static function caption(array|Renderable|string $children = [], array $attributes = []) : Caption {
        $children = self::convertToChildArray($children);
        return new Caption($children, $attributes);
    }
    
    /**
     * Create new HTML tag: cite
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Cite
     */
    public static function cite(array|Renderable|string $children = [], array $attributes = []) : Cite {
        $children = self::convertToChildArray($children);
        return new Cite($children, $attributes);
    }
    
    /**
     * Create new HTML tag: code
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Code
     */
    public static function code(array|Renderable|string $children = [], array $attributes = []) : Code {
        $children = self::convertToChildArray($children);
        return new Code($children, $attributes);
    }
    
    /**
     * Create new HTML tag: col
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Col
     */
    public static function col(array $attributes = []) : Col {
        return new Col($attributes);
    }
    
    /**
     * Create new HTML tag: colgroup
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Colgroup
     */
    public static function colgroup(array|Renderable|string $children = [], array $attributes = []) : Colgroup {
        $children = self::convertToChildArray($children);
        return new Colgroup($children, $attributes);
    }
    
    /**
     * Create new HTML tag: data
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Data
     */
    public static function data(array|Renderable|string $children = [], array $attributes = []) : Data {
        $children = self::convertToChildArray($children);
        return new Data($children, $attributes);
    }
    
    /**
     * Create new HTML tag: datalist
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Datalist
     */
    public static function datalist(array|Renderable|string $children = [], array $attributes = []) : Datalist {
        $children = self::convertToChildArray($children);
        return new Datalist($children, $attributes);
    }
    
    /**
     * Create new HTML tag: dd
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Dd
     */
    public static function dd(array|Renderable|string $children = [], array $attributes = []) : Dd {
        $children = self::convertToChildArray($children);
        return new Dd($children, $attributes);
    }
    
    /**
     * Create new HTML tag: del
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Del
     */
    public static function del(array|Renderable|string $children = [], array $attributes = []) : Del {
        $children = self::convertToChildArray($children);
        return new Del($children, $attributes);
    }
    
    /**
     * Create new HTML tag: details
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Details
     */
    public static function details(array|Renderable|string $children = [], array $attributes = []) : Details {
        $children = self::convertToChildArray($children);
        return new Details($children, $attributes);
    }
    
    /**
     * Create new HTML tag: dfn
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Dfn
     */
    public static function dfn(array|Renderable|string $children = [], array $attributes = []) : Dfn {
        $children = self::convertToChildArray($children);
        return new Dfn($children, $attributes);
    }
    
    /**
     * Create new HTML tag: dialog
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Dialog
     */
    public static function dialog(array|Renderable|string $children = [], array $attributes = []) : Dialog {
        $children = self::convertToChildArray($children);
        return new Dialog($children, $attributes);
    }
    
    /**
     * Create new HTML tag: div
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Div
     */
    public static function div(array|Renderable|string $children = [], array $attributes = []) : Div {
        $children = self::convertToChildArray($children);
        return new Div($children, $attributes);
    }
    
    /**
     * Create new HTML tag: dl
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Dl
     */
    public static function dl(array|Renderable|string $children = [], array $attributes = []) : Dl {
        $children = self::convertToChildArray($children);
        return new Dl($children, $attributes);
    }
    
    /**
     * Create new HTML tag: dt
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Dt
     */
    public static function dt(array|Renderable|string $children = [], array $attributes = []) : Dt {
        $children = self::convertToChildArray($children);
        return new Dt($children, $attributes);
    }
    
    /**
     * Create new HTML tag: em
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Em
     */
    public static function em(array|Renderable|string $children = [], array $attributes = []) : Em {
        $children = self::convertToChildArray($children);
        return new Em($children, $attributes);
    }
    
    /**
     * Create new HTML tag: embed
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Embed
     */
    public static function embed(array $attributes = []) : Embed {
        return new Embed($attributes);
    }
    
    /**
     * Create new HTML tag: fieldset
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Fieldset
     */
    public static function fieldset(array|Renderable|string $children = [], array $attributes = []) : Fieldset {
        $children = self::convertToChildArray($children);
        return new Fieldset($children, $attributes);
    }
    
    /**
     * Create new HTML tag: figcaption
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Figcaption
     */
    public static function figcaption(array|Renderable|string $children = [], array $attributes = []) : Figcaption {
        $children = self::convertToChildArray($children);
        return new Figcaption($children, $attributes);
    }
    
    /**
     * Create new HTML tag: figure
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Figure
     */
    public static function figure(array|Renderable|string $children = [], array $attributes = []) : Figure {
        $children = self::convertToChildArray($children);
        return new Figure($children, $attributes);
    }
    
    /**
     * Create new HTML tag: footer
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Footer
     */
    public static function footer(array|Renderable|string $children = [], array $attributes = []) : Footer {
        $children = self::convertToChildArray($children);
        return new Footer($children, $attributes);
    }
    
    /**
     * Create new HTML tag: form
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Form
     */
    public static function form(array|Renderable|string $children = [], array $attributes = []) : Form {
        $children = self::convertToChildArray($children);
        return new Form($children, $attributes);
    }
    
    /**
     * Create new HTML tag: h1
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\H1
     */
    public static function h1(array|Renderable|string $children = [], array $attributes = []) : H1 {
        $children = self::convertToChildArray($children);
        return new H1($children, $attributes);
    }
    
    /**
     * Create new HTML tag: h2
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\H2
     */
    public static function h2(array|Renderable|string $children = [], array $attributes = []) : H2 {
        $children = self::convertToChildArray($children);
        return new H2($children, $attributes);
    }
    
    /**
     * Create new HTML tag: h3
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\H3
     */
    public static function h3(array|Renderable|string $children = [], array $attributes = []) : H3 {
        $children = self::convertToChildArray($children);
        return new H3($children, $attributes);
    }
    
    /**
     * Create new HTML tag: h4
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\H4
     */
    public static function h4(array|Renderable|string $children = [], array $attributes = []) : H4 {
        $children = self::convertToChildArray($children);
        return new H4($children, $attributes);
    }
    
    /**
     * Create new HTML tag: h5
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\H5
     */
    public static function h5(array|Renderable|string $children = [], array $attributes = []) : H5 {
        $children = self::convertToChildArray($children);
        return new H5($children, $attributes);
    }
    
    /**
     * Create new HTML tag: h6
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\H6
     */
    public static function h6(array|Renderable|string $children = [], array $attributes = []) : H6 {
        $children = self::convertToChildArray($children);
        return new H6($children, $attributes);
    }
    
    /**
     * Create new HTML tag: head
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Head
     */
    public static function head(array|Renderable|string $children = [], array $attributes = []) : Head {
        $children = self::convertToChildArray($children);
        return new Head($children, $attributes);
    }
    
    /**
     * Create new HTML tag: header
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Header
     */
    public static function header(array|Renderable|string $children = [], array $attributes = []) : Header {
        $children = self::convertToChildArray($children);
        return new Header($children, $attributes);
    }
    
    /**
     * Create new HTML tag: hgroup
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Hgroup
     */
    public static function hgroup(array|Renderable|string $children = [], array $attributes = []) : Hgroup {
        $children = self::convertToChildArray($children);
        return new Hgroup($children, $attributes);
    }
    
    /**
     * Create new HTML tag: hr
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Hr
     */
    public static function hr(array $attributes = []) : Hr {
        return new Hr($attributes);
    }
    
    /**
     * Create new HTML tag: html
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Html
     */
    public static function html(array|Renderable|string $children = [], array $attributes = []) : HtmlTag {
        $children = self::convertToChildArray($children);
        return new HtmlTag($children, $attributes);
    }
    
    /**
     * Create new HTML tag: i
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\I
     */
    public static function i(array|Renderable|string $children = [], array $attributes = []) : I {
        $children = self::convertToChildArray($children);
        return new I($children, $attributes);
    }
    
    /**
     * Create new HTML tag: iframe
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Iframe
     */
    public static function iframe(array|Renderable|string $children = [], array $attributes = []) : Iframe {
        $children = self::convertToChildArray($children);
        return new Iframe($children, $attributes);
    }
    
    /**
     * Create new HTML tag: img
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Img
     */
    public static function img(array $attributes = []) : Img {
        return new Img($attributes);
    }
    
    /**
     * Create new HTML tag: input
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Input
     */
    public static function input(array $attributes = []) : Input {
        return new Input($attributes);
    }
    
    /**
     * Create new HTML tag: ins
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Ins
     */
    public static function ins(array|Renderable|string $children = [], array $attributes = []) : Ins {
        $children = self::convertToChildArray($children);
        return new Ins($children, $attributes);
    }
    
    /**
     * Create new HTML tag: kbd
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Kbd
     */
    public static function kbd(array|Renderable|string $children = [], array $attributes = []) : Kbd {
        $children = self::convertToChildArray($children);
        return new Kbd($children, $attributes);
    }
    
    /**
     * Create new HTML tag: label
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Label
     */
    public static function label(array|Renderable|string $children = [], array $attributes = []) : Label {
        $children = self::convertToChildArray($children);
        return new Label($children, $attributes);
    }
    
    /**
     * Create new HTML tag: legend
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Legend
     */
    public static function legend(array|Renderable|string $children = [], array $attributes = []) : Legend {
        $children = self::convertToChildArray($children);
        return new Legend($children, $attributes);
    }
    
    /**
     * Create new HTML tag: li
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Li
     */
    public static function li(array|Renderable|string $children = [], array $attributes = []) : Li {
        $children = self::convertToChildArray($children);
        return new Li($children, $attributes);
    }
    
    /**
     * Create new HTML tag: link
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Link
     */
    public static function link(array $attributes = []) : Link {
        return new Link($attributes);
    }
    
    /**
     * Create new HTML tag: main
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Main
     */
    public static function main(array|Renderable|string $children = [], array $attributes = []) : Main {
        $children = self::convertToChildArray($children);
        return new Main($children, $attributes);
    }
    
    /**
     * Create new HTML tag: map
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Map
     */
    public static function map(array|Renderable|string $children = [], array $attributes = []) : Map {
        $children = self::convertToChildArray($children);
        return new Map($children, $attributes);
    }
    
    /**
     * Create new HTML tag: mark
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Mark
     */
    public static function mark(array|Renderable|string $children = [], array $attributes = []) : Mark {
        $children = self::convertToChildArray($children);
        return new Mark($children, $attributes);
    }
    
    /**
     * Create new HTML tag: menu
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Menu
     */
    public static function menu(array|Renderable|string $children = [], array $attributes = []) : Menu {
        $children = self::convertToChildArray($children);
        return new Menu($children, $attributes);
    }
    
    /**
     * Create new HTML tag: meta
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Meta
     */
    public static function meta(array $attributes = []) : Meta {
        return new Meta($attributes);
    }
    
    /**
     * Create new HTML tag: meter
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Meter
     */
    public static function meter(array|Renderable|string $children = [], array $attributes = []) : Meter {
        $children = self::convertToChildArray($children);
        return new Meter($children, $attributes);
    }
    
    /**
     * Create new HTML tag: nav
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Nav
     */
    public static function nav(array|Renderable|string $children = [], array $attributes = []) : Nav {
        $children = self::convertToChildArray($children);
        return new Nav($children, $attributes);
    }
    
    /**
     * Create new HTML tag: noscript
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Noscript
     */
    public static function noscript(array|Renderable|string $children = [], array $attributes = []) : Noscript {
        $children = self::convertToChildArray($children);
        return new Noscript($children, $attributes);
    }
    
    /**
     * Create new HTML tag: ol
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Ol
     */
    public static function ol(array|Renderable|string $children = [], array $attributes = []) : Ol {
        $children = self::convertToChildArray($children);
        return new Ol($children, $attributes);
    }
    
    /**
     * Create new HTML tag: optgroup
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Optgroup
     */
    public static function optgroup(array|Renderable|string $children = [], array $attributes = []) : Optgroup {
        $children = self::convertToChildArray($children);
        return new Optgroup($children, $attributes);
    }
    
    /**
     * Create new HTML tag: option
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Option
     */
    public static function option(array|Renderable|string $children = [], array $attributes = []) : Option {
        $children = self::convertToChildArray($children);
        return new Option($children, $attributes);
    }
    
    /**
     * Create new HTML tag: output
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Output
     */
    public static function output(array|Renderable|string $children = [], array $attributes = []) : Output {
        $children = self::convertToChildArray($children);
        return new Output($children, $attributes);
    }
    
    /**
     * Create new HTML tag: p
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\P
     */
    public static function p(array|Renderable|string $children = [], array $attributes = []) : P {
        $children = self::convertToChildArray($children);
        return new P($children, $attributes);
    }
    
    /**
     * Create new HTML tag: param
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Param
     */
    public static function param(array $attributes = []) : Param {
        return new Param($attributes);
    }
    
    /**
     * Create new HTML tag: picture
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Picture
     */
    public static function picture(array|Renderable|string $children = [], array $attributes = []) : Picture {
        $children = self::convertToChildArray($children);
        return new Picture($children, $attributes);
    }
    
    /**
     * Create new HTML tag: pre
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Pre
     */
    public static function pre(array|Renderable|string $children = [], array $attributes = []) : Pre {
        $children = self::convertToChildArray($children);
        return new Pre($children, $attributes);
    }
    
    /**
     * Create new HTML tag: progress
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Progress
     */
    public static function progress(array|Renderable|string $children = [], array $attributes = []) : Progress {
        $children = self::convertToChildArray($children);
        return new Progress($children, $attributes);
    }
    
    /**
     * Create new HTML tag: q
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Q
     */
    public static function q(array|Renderable|string $children = [], array $attributes = []) : Q {
        $children = self::convertToChildArray($children);
        return new Q($children, $attributes);
    }
    
    /**
     * Create new HTML tag: rp
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Rp
     */
    public static function rp(array|Renderable|string $children = [], array $attributes = []) : Rp {
        $children = self::convertToChildArray($children);
        return new Rp($children, $attributes);
    }
    
    /**
     * Create new HTML tag: rt
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Rt
     */
    public static function rt(array|Renderable|string $children = [], array $attributes = []) : Rt {
        $children = self::convertToChildArray($children);
        return new Rt($children, $attributes);
    }
    
    /**
     * Create new HTML tag: ruby
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Ruby
     */
    public static function ruby(array|Renderable|string $children = [], array $attributes = []) : Ruby {
        $children = self::convertToChildArray($children);
        return new Ruby($children, $attributes);
    }
    
    /**
     * Create new HTML tag: s
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\S
     */
    public static function s(array|Renderable|string $children = [], array $attributes = []) : S {
        $children = self::convertToChildArray($children);
        return new S($children, $attributes);
    }
    
    /**
     * Create new HTML tag: samp
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Samp
     */
    public static function samp(array|Renderable|string $children = [], array $attributes = []) : Samp {
        $children = self::convertToChildArray($children);
        return new Samp($children, $attributes);
    }
    
    /**
     * Create new HTML tag: script
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Script
     */
    public static function script(array|Renderable|string $children = [], array $attributes = []) : Script {
        $children = self::convertToChildArray($children);
        return new Script($children, $attributes);
    }
    
    /**
     * Create new HTML tag: search
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Search
     */
    public static function search(array|Renderable|string $children = [], array $attributes = []) : Search {
        $children = self::convertToChildArray($children);
        return new Search($children, $attributes);
    }
    
    /**
     * Create new HTML tag: section
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Section
     */
    public static function section(array|Renderable|string $children = [], array $attributes = []) : Section {
        $children = self::convertToChildArray($children);
        return new Section($children, $attributes);
    }
    
    /**
     * Create new HTML tag: select
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Select
     */
    public static function select(array|Renderable|string $children = [], array $attributes = []) : Select {
        $children = self::convertToChildArray($children);
        return new Select($children, $attributes);
    }
    
    /**
     * Create new HTML tag: small
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Small
     */
    public static function small(array|Renderable|string $children = [], array $attributes = []) : Small {
        $children = self::convertToChildArray($children);
        return new Small($children, $attributes);
    }
    
    /**
     * Create new HTML tag: source
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Source
     */
    public static function source(array $attributes = []) : Source {
        return new Source($attributes);
    }
    
    /**
     * Create new HTML tag: span
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Span
     */
    public static function span(array|Renderable|string $children = [], array $attributes = []) : Span {
        $children = self::convertToChildArray($children);
        return new Span($children, $attributes);
    }
    
    /**
     * Create new HTML tag: strike
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Strike
     */
    public static function strike(array|Renderable|string $children = [], array $attributes = []) : Strike {
        $children = self::convertToChildArray($children);
        return new Strike($children, $attributes);
    }
    
    /**
     * Create new HTML tag: strong
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Strong
     */
    public static function strong(array|Renderable|string $children = [], array $attributes = []) : Strong {
        $children = self::convertToChildArray($children);
        return new Strong($children, $attributes);
    }
    
    /**
     * Create new HTML tag: style
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Style
     */
    public static function style(array|Renderable|string $children = [], array $attributes = []) : Style {
        $children = self::convertToChildArray($children);
        return new Style($children, $attributes);
    }
    
    /**
     * Create new HTML tag: sub
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Sub
     */
    public static function sub(array|Renderable|string $children = [], array $attributes = []) : Sub {
        $children = self::convertToChildArray($children);
        return new Sub($children, $attributes);
    }
    
    /**
     * Create new HTML tag: summary
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Summary
     */
    public static function summary(array|Renderable|string $children = [], array $attributes = []) : Summary {
        $children = self::convertToChildArray($children);
        return new Summary($children, $attributes);
    }
    
    /**
     * Create new HTML tag: sup
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Sup
     */
    public static function sup(array|Renderable|string $children = [], array $attributes = []) : Sup {
        $children = self::convertToChildArray($children);
        return new Sup($children, $attributes);
    }
    
    /**
     * Create new HTML tag: svg
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Svg
     */
    public static function svg(array|Renderable|string $children = [], array $attributes = []) : Svg {
        $children = self::convertToChildArray($children);
        return new Svg($children, $attributes);
    }
    
    /**
     * Create new HTML tag: table
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Table
     */
    public static function table(array|Renderable|string $children = [], array $attributes = []) : Table {
        $children = self::convertToChildArray($children);
        return new Table($children, $attributes);
    }
    
    /**
     * Create new HTML tag: tbody
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Tbody
     */
    public static function tbody(array|Renderable|string $children = [], array $attributes = []) : Tbody {
        $children = self::convertToChildArray($children);
        return new Tbody($children, $attributes);
    }
    
    /**
     * Create new HTML tag: td
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Td
     */
    public static function td(array|Renderable|string $children = [], array $attributes = []) : Td {
        $children = self::convertToChildArray($children);
        return new Td($children, $attributes);
    }
    
    /**
     * Create new HTML tag: template
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Template
     */
    public static function template(array|Renderable|string $children = [], array $attributes = []) : Template {
        $children = self::convertToChildArray($children);
        return new Template($children, $attributes);
    }
    
    /**
     * Create new HTML tag: textarea
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Textarea
     */
    public static function textarea(array|Renderable|string $children = [], array $attributes = []) : Textarea {
        $children = self::convertToChildArray($children);
        return new Textarea($children, $attributes);
    }
    
    /**
     * Create new HTML tag: tfoot
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Tfoot
     */
    public static function tfoot(array|Renderable|string $children = [], array $attributes = []) : Tfoot {
        $children = self::convertToChildArray($children);
        return new Tfoot($children, $attributes);
    }
    
    /**
     * Create new HTML tag: th
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Th
     */
    public static function th(array|Renderable|string $children = [], array $attributes = []) : Th {
        $children = self::convertToChildArray($children);
        return new Th($children, $attributes);
    }
    
    /**
     * Create new HTML tag: thead
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Thead
     */
    public static function thead(array|Renderable|string $children = [], array $attributes = []) : Thead {
        $children = self::convertToChildArray($children);
        return new Thead($children, $attributes);
    }
    
    /**
     * Create new HTML tag: time
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Time
     */
    public static function time(array|Renderable|string $children = [], array $attributes = []) : Time {
        $children = self::convertToChildArray($children);
        return new Time($children, $attributes);
    }
    
    /**
     * Create new HTML tag: title
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Title
     */
    public static function title(array|Renderable|string $children = [], array $attributes = []) : Title {
        $children = self::convertToChildArray($children);
        return new Title($children, $attributes);
    }
    
    /**
     * Create new HTML tag: tr
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Tr
     */
    public static function tr(array|Renderable|string $children = [], array $attributes = []) : Tr {
        $children = self::convertToChildArray($children);
        return new Tr($children, $attributes);
    }
    
    /**
     * Create new HTML tag: track
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Track
     */
    public static function track(array $attributes = []) : Track {
        return new Track($attributes);
    }
    
    /**
     * Create new HTML tag: u
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\U
     */
    public static function u(array|Renderable|string $children = [], array $attributes = []) : U {
        $children = self::convertToChildArray($children);
        return new U($children, $attributes);
    }
    
    /**
     * Create new HTML tag: ul
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Ul
     */
    public static function ul(array|Renderable|string $children = [], array $attributes = []) : Ul {
        $children = self::convertToChildArray($children);
        return new Ul($children, $attributes);
    }
    
    /**
     * Create new HTML tag: var
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\VarTag
     */
    public static function var(array|Renderable|string $children = [], array $attributes = []) : VarTag {
        $children = self::convertToChildArray($children);
        return new VarTag($children, $attributes);
    }
    
    /**
     * Create new HTML tag: video
     * @param array|\Esayers\Html\Renderable|string $children
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Video
     */
    public static function video(array|Renderable|string $children = [], array $attributes = []) : Video {
        $children = self::convertToChildArray($children);
        return new Video($children, $attributes);
    }
    
    /**
     * Create new HTML tag: wbr
     * @param array $attributes
     * @return \Esayers\Html\Elements\Tags\Wbr
     */
    public static function wbr(array $attributes = []) : Wbr {
        return new Wbr($attributes);
    }

    /**
     * Handles children being passed as array|Renderable|string and converts it into array
     * @param array|\Esayers\Html\Renderable|string $children
     * @return array
     */
    private static function convertToChildArray(array|Renderable|string $children) {
        if(is_string($children)) {
            return [EncodedString::new($children)];
        } else if (is_a($children, Renderable::class)) {
            return [$children];
        } else {
            return $children;
        }
    }

    /**
     * @param string $textContent
     * @return \Esayers\Html\Elements\EncodedString
     */
    public static function text(string $textContent): EncodedString
    {
        return new EncodedString($textContent);
    }
}

<head>
<title>{#tagwrap_dlg.title}</title>
<script type="text/javascript" src="../tinymce/tiny_mce_popup.js"></script>
<script type="text/javascript" src="js/dialog.js"></script>
<link rel="stylesheet" type="text/css" href="css/tagwrap.css" />
</head>

<body>

<div class="y_logo_contener">
	<img src="img/html5.png" alt="HTML5" />
</div>
<div class="yinstr">
    <p>{#tagwrap_dlg.note}</p>
</div>

<form onSubmit="TagwrapDialog.insert();return false;" action="#" method="post">
<div class="mceActionPanel">
<script type="text/javascript" language="javascript">
var jwl_sel_content3 = tinyMCE.activeEditor.selection.getContent();
</script>

<table id="tagwrap" cellspacing="5px" cellpadding="2px">
<tbody>
<tr>
<td class="mybutton" title="Specifies a hyperlink.">
<a style="display:block;width:100%;height:100%;" href="tags/a.php" onClick="window.close();">&#60;a&#62;</a>
</td>
<td class="mybutton" title="Specifies a table caption.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<caption>' + jwl_sel_content3 + '</caption>');">&#60;caption&#62;</a>
</td>
<td class="mybutton" title="Specifies a target for events sent by a server.">
<a style="display:block;width:100%;height:100%;" href="tags/eventsource.php" onClick="window.close();">&#60;eventsource&#62;</a>
</td>
<td class="mybutton" title="Specifies italic text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<i>' + jwl_sel_content3 + '</i>');">&#60;i&#62;</a>
</td>
<td class="mybutton" title="Specifies a noscript section.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<noscript>' + jwl_sel_content3 + '</noscript>');">&#60;noscript&#62;</a>
</td>
<td class="mybutton" title="Specifies a section.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<section>' + jwl_sel_content3 + '</section>');">&#60;section&#62;</a>
</td>
<td class="mybutton" title="Specifies a date/time.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<time>' + jwl_sel_content3 + '</time>');">&#60;time&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies an abbreviation.">
<a style="display:block;width:100%;height:100%;" href="tags/abbr.php" onClick="window.close();">&#60;abbr&#62;</a>
</td>
<td class="mybutton" title="Specifies a citation.">
<a style="display:block;width:100%;height:100%;" href="tags/cite.php" onClick="window.close();">&#60;cite&#62;</a>
</td>
<td class="mybutton" title="Specifies a fieldset.">
<a style="display:block;width:100%;height:100%;" href="tags/fieldset.php" onClick="window.close();">&#60;fieldset&#62;</a>
</td>
<td class="mybutton" title="Specifies an inline sub window(frame)">
<a style="display:block;width:100%;height:100%;" href="tags/iframe.php" onClick="window.close();">&#60;iframe&#62;</a>
</td>
<td class="mybutton" title="Specifies an embedded object.">
<a style="display:block;width:100%;height:100%;" href="tags/object.php" onClick="window.close();">&#60;object&#62;</a>
</td>
<td class="mybutton" title="Specifies a selectable list.">
<a style="display:block;width:100%;height:100%;" href="tags/select.php" onClick="window.close();">&#60;select&#62;</a>
</td>
<td class="mybutton" title="Specifies the document title.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<title>' + jwl_sel_content3 + '</title>');">&#60;title&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies an acronym.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<acronym>' + jwl_sel_content3 + '</acronym>');">&#60;acronym&#62;</a>
</td>
<td class="mybutton" title="Specifies computer code text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<code>' + jwl_sel_content3 + '</code>');">&#60;code&#62;</a>
</td>
<td class="mybutton" title="Specifies caption for the 'figure' element.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<figcaption>' + jwl_sel_content3 + '</figcaption>');">&#60;figcaption&#62;</a>
</td>
<td class="mybutton" title="Specifies an image.">
<a style="display:block;width:100%;height:100%;" href="tags/img.php" onClick="window.close();">&#60;img&#62;</a>
</td>
<td class="mybutton" title="Specifies an ordered list.">
<a style="display:block;width:100%;height:100%;" href="tags/ol.php" onClick="window.close();">&#60;ol&#62;</a>
</td>
<td class="mybutton" title="Specifies small text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<small>' + jwl_sel_content3 + '</small>');">&#60;small&#62;</a>
</td>
<td class="mybutton" title="Specifies a table row.">
<a style="display:block;width:100%;height:100%;" href="tags/tr.php" onClick="window.close();">&#60;tr&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies an address element.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<address>' + jwl_sel_content3 + '</address>');">&#60;address&#62;</a>
</td>
<td class="mybutton" title="Specifies attributes for table columns.">
<a style="display:block;width:100%;height:100%;" href="tags/col.php" onClick="window.close();">&#60;col&#62;</a>
</td>
<td class="mybutton" title="Specifies a group of media content, and their caption.">
<a style="display:block;width:100%;height:100%;" href="tags/figure.php" onClick="window.close();">&#60;figure&#62;</a>
</td>
<td class="mybutton" title="Specifies an input field.">
<a style="display:block;width:100%;height:100%;" href="tags/input.php" onClick="window.close();">&#60;input&#62;</a>
</td>
<td class="mybutton" title="Specifies an option group.">
<a style="display:block;width:100%;height:100%;" href="tags/optgroup.php" onClick="window.close();">&#60;optgroup&#62;</a>
</td>
<td class="mybutton" title="Specifies media resources.">
<a style="display:block;width:100%;height:100%;" href="tags/source.php" onClick="window.close();">&#60;source&#62;</a>
</td>
<td class="mybutton" title="Specifies a text track for media such as video and audio.">
<a style="display:block;width:100%;height:100%;" href="tags/track.php" onClick="window.close();">&#60;track&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies an area inside an image map.">
<a style="display:block;width:100%;height:100%;" href="tags/area.php" onClick="window.close();">&#60;area&#62;</a>
</td>
<td class="mybutton" title="Specifies groups of table columns.">
<a style="display:block;width:100%;height:100%;" href="tags/colgroup.php" onClick="window.close();">&#60;colgroup&#62;</a>
</td>
<td class="mybutton" title="Specifies a footer for a section or page.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<footer>' + jwl_sel_content3 + '</footer>');">&#60;footer&#62;</a>
</td>
<td class="mybutton" title="Specifies inserted text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<ins>' + jwl_sel_content3 + '</ins>');">&#60;ins&#62;</a>
</td>
<td class="mybutton" title="Specifies an option in a drop-down list.">
<a style="display:block;width:100%;height:100%;" href="tags/option.php" onClick="window.close();">&#60;option&#62;</a>
</td>
<td class="mybutton" title="Specifies a section in a document.">
<a style="display:block;width:100%;height:100%;" href="tags/span.php" onClick="window.close();">&#60;span&#62;</a>
</td>
<td class="mybutton" title="Specifies text with a non-textual annotation.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<u>' + jwl_sel_content3 + '</u>');">&#60;u&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies an article.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<article>' + jwl_sel_content3 + '</article>');">&#60;article&#62;</a>
</td>
<td class="mybutton" title="Specifies a command.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<command>' + jwl_sel_content3 + '</command>');">&#60;command&#62;</a>
</td>
<td class="mybutton" title="Specifies a form">
<a style="display:block;width:100%;height:100%;" href="tags/form.php" onClick="window.close();">&#60;form&#62;</a>
</td>
<td class="mybutton" title="Specifies keyboard text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<kbd>' + jwl_sel_content3 + '</kbd>');">&#60;kbd&#62;</a>
</td>
<td class="mybutton" title="Specifies some types of output.">
<a style="display:block;width:100%;height:100%;" href="tags/output.php" onClick="window.close();">&#60;output&#62;</a>
</td>
<td class="mybutton" title="Specifies strong text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<strong>' + jwl_sel_content3 + '</strong>');">&#60;strong&#62;</a>
</td>
<td class="mybutton" title="Specifies an unordered list.">
<a style="display:block;width:100%;height:100%;" href="tags/ul.php" onClick="window.close();">&#60;ul&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies content aside from the page content.">
<a style="display:block;width:100%;height:100%;" href="tags/aside.php" onClick="window.close();">&#60;aside&#62;</a>
</td>
<td class="mybutton" title="Allows for machine-readable data to be provided.">
<a style="display:block;width:100%;height:100%;" href="tags/data.php" onClick="window.close();">&#60;data&#62;</a>
</td>
<td class="mybutton" title="Specifies a heading level 1.">
<a style="display:block;width:100%;height:100%;" href="tags/h1.php" onClick="window.close();">&#60;h1&#62;</a>
</td>
<td class="mybutton" title="Generates a key pair.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<keygen>' + jwl_sel_content3 + '</keygen>');">&#60;keygen&#62;</a>
</td>
<td class="mybutton" title="Specifies a paragraph.">
<a style="display:block;width:100%;height:100%;" href="tags/p.php" onClick="window.close();">&#60;p&#62;</a>
</td>
<td class="mybutton" title="Specifies a style definition.">
<a style="display:block;width:100%;height:100%;" href="tags/style.php" onClick="window.close();">&#60;style&#62;</a>
</td>
<td class="mybutton" title="Specifies a variable.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<var>' + jwl_sel_content3 + '</var>');">&#60;var&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies sound element.">
<a style="display:block;width:100%;height:100%;" href="tags/audio.php" onClick="window.close();">&#60;audio&#62;</a>
</td>
<td class="mybutton" title="Specifies an 'autocomplete' dropdown list.">
<a style="display:block;width:100%;height:100%;" href="tags/datalist.php" onClick="window.close();">&#60;datalist&#62;</a>
</td>
<td class="mybutton" title="Specifies a heading level 2.">
<a style="display:block;width:100%;height:100%;" href="tags/h2.php" onClick="window.close();">&#60;h2&#62;</a>
</td>
<td class="mybutton" title="Specifies a label for a form control.">
<a style="display:block;width:100%;height:100%;" href="tags/label.php" onClick="window.close();">&#60;label&#62;</a>
</td>
<td class="mybutton" title="Specifies a parameter for an object.">
<a style="display:block;width:100%;height:100%;" href="tags/param.php" onClick="window.close();">&#60;param&#62;</a>
</td>
<td class="mybutton" title="Specifies subscripted text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<sub>' + jwl_sel_content3 + '</sub>');">&#60;sub&#62;</a>
</td>
<td class="mybutton" title="Specifies a video.">
<a style="display:block;width:100%;height:100%;" href="tags/video.php" onClick="window.close();">&#60;video&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies bold text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<b>' + jwl_sel_content3 + '</b>');">&#60;b&#62;</a>
</td>
<td class="mybutton" title="Specifies a definition description.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<dd>' + jwl_sel_content3 + '</dd>');">&#60;dd&#62;</a>
</td>
<td class="mybutton" title="Specifies a heading level 3.">
<a style="display:block;width:100%;height:100%;" href="tags/h3.php" onClick="window.close();">&#60;h3&#62;</a>
</td>
<td class="mybutton" title="Specifies a title in a fieldset.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<legend>' + jwl_sel_content3 + '</legend>');">&#60;legend&#62;</a>
</td>
<td class="mybutton" title="Specifies preformatted text.">
<a style="display:block;width:100%;height:100%;" href="tags/pre.php" onClick="window.close();">&#60;pre&#62;</a>
</td>
<td class="mybutton" title="Specifies a summary/caption for the 'details' element.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<summary>' + jwl_sel_content3 + '</summary>');">&#60;summary&#62;</a>
</td>
<td class="mybutton" title="Specifies a line break <em>opportunity</em> for very long words and strings of text with no spaces.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<wbr>');">&#60;wbr&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies a base URL for all the links in a page.">
<a style="display:block;width:100%;height:100%;" href="tags/base.php" onClick="window.close();">&#60;base&#62;</a>
</td>
<td class="mybutton" title="Specifies deleted text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<del>' + jwl_sel_content3 + '</del>');">&#60;del&#62;</a>
</td>
<td class="mybutton" title="Specifies a heading level 4.">
<a style="display:block;width:100%;height:100%;" href="tags/h4.php" onClick="window.close();">&#60;h4&#62;</a>
</td>
<td class="mybutton" title="Specifies a list item.">
<a style="display:block;width:100%;height:100%;" href="tags/li.php" onClick="window.close();">&#60;li&#62;</a>
</td>
<td class="mybutton" title="Specifies progress of a task of any kind.">
<a style="display:block;width:100%;height:100%;" href="tags/progress.php" onClick="window.close();">&#60;progress&#62;</a>
</td>
<td class="mybutton" title="Specifies superscripted text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<sup>' + jwl_sel_content3 + '</sup>');">&#60;sup&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="For bi-directional text formatting.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<bdi>' + jwl_sel_content3 + '</bdi>');">&#60;bdi&#62;</a>
</td>
<td class="mybutton" title="Specifies details of an element.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<details>' + jwl_sel_content3 + '</details>');">&#60;details&#62;</a>
</td>
<td class="mybutton" title="Specifies a heading level 5.">
<a style="display:block;width:100%;height:100%;" href="tags/h5.php" onClick="window.close();">&#60;h5&#62;</a>
</td>
<td class="mybutton" title="Specifies a resource reference.">
<a style="display:block;width:100%;height:100%;" href="tags/link.php" onClick="window.close();">&#60;link&#62;</a>
</td>
<td class="mybutton" title="Specifies a short quotation.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<q>' + jwl_sel_content3 + '</q>');">&#60;q&#62;</a>
</td>
<td class="mybutton" title="Specifies a table.">
<a style="display:block;width:100%;height:100%;" href="tags/table.php" onClick="window.close();">&#60;table&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies the direction of text display.">
<a style="display:block;width:100%;height:100%;" href="tags/bdo.php" onClick="window.close();">&#60;bdo&#62;</a>
</td>
<td class="mybutton" title="Defines a definition term.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<dfn>' + jwl_sel_content3 + '</dfn>');">&#60;dfn&#62;</a>
</td>
<td class="mybutton" title="Specifies a heading level 6.">
<a style="display:block;width:100%;height:100%;" href="tags/h6.php" onClick="window.close();">&#60;h6&#62;</a>
</td>
<td class="mybutton" title="Specifies marked text.">
<a style="display:block;width:100%;height:100%;" href="tags/mark.php" onClick="window.close();">&#60;mark&#62;</a>
</td>
<td class="mybutton" title="Specifies a ruby annotation (used in East Asian typography).">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<ruby>' + jwl_sel_content3 + '</caprubytion>');">&#60;ruby&#62;</a>
</td>
<td class="mybutton" title="Specifies a table body.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<tbody>' + jwl_sel_content3 + '</tbody>');">&#60;tbody&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies a long quotation.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<blockquote>' + jwl_sel_content3 + '</blockquote>');">&#60;blockquote&#62;</a>
</td>
<td class="mybutton" title="Specifies a section in a document.">
<a style="display:block;width:100%;height:100%;" href="tags/div.php" onClick="window.close();">&#60;div&#62;</a>
</td>
<td class="mybutton" title="Specifies information about the document.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<head>' + jwl_sel_content3 + '</head>');">&#60;head&#62;</a>
</td>
<td class="mybutton" title="Specifies an image map.">
<a style="display:block;width:100%;height:100%;" href="tags/map.php" onClick="window.close();">&#60;map&#62;</a>
</td>
<td class="mybutton" title="Used for the benefit of browsers that don't support ruby annotations.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<rp>' + jwl_sel_content3 + '</rp>');">&#60;rp&#62;</a>
</td>
<td class="mybutton" title="Specifies a table cell.">
<a style="display:block;width:100%;height:100%;" href="tags/td.php" onClick="window.close();">&#60;td&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies the body element.">
<a style="display:block;width:100%;height:100%;" href="tags/body.php" onClick="window.close();">&#60;body&#62;</a>
</td>
<td class="mybutton" title="Specifies a definition list.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<dl>' + jwl_sel_content3 + '</dl>');">&#60;dl&#62;</a>
</td>
<td class="mybutton" title="Specifies a group of introductory or navigational aids, including 'hgroup' elements.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<header>' + jwl_sel_content3 + '</header>');">&#60;header&#62;</a>
</td>
<td class="mybutton" title="Specifies a menu list.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<menu>' + jwl_sel_content3 + '</menu>');">&#60;menu&#62;</a>
</td>
<td class="mybutton" title="Specifies the ruby text component of a ruby annotation.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<rt>' + jwl_sel_content3 + '</rt>');">&#60;rt&#62;</a>
</td>
<td class="mybutton" title="Specifies a text area.">
<a style="display:block;width:100%;height:100%;" href="tags/textarea.php" onClick="window.close();">&#60;textarea&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Inserts a single line break.">
<a style="display:block;width:100%;height:100%;" href="tags/br.php" onClick="window.close();">&#60;br&#62;</a>
</td>
<td class="mybutton" title="Specifies a definition term.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<dt>' + jwl_sel_content3 + '</dt>');">&#60;dt&#62;</a>
</td>
<td class="mybutton" title="Specifies a header for a section or page.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<hgroup>' + jwl_sel_content3 + '</hgroup>');">&#60;hgroup&#62;</a>
</td>
<td class="mybutton" title="Specifies meta information.">
<a style="display:block;width:100%;height:100%;" href="tags/meta.php" onClick="window.close();">&#60;meta&#62;</a>
</td>
<td class="mybutton" title="Indicates text that's no longer accurate or relevant.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<s>' + jwl_sel_content3 + '</s>');">&#60;s&#62;</a>
</td>
<td class="mybutton" title="Specifies a table footer.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<tfoot>' + jwl_sel_content3 + '</tfoot>');">&#60;tfoot&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Specifies a push button.">
<a style="display:block;width:100%;height:100%;" href="tags/button.php" onClick="window.close();">&#60;button&#62;</a>
</td>
<td class="mybutton" title="Specifies emphasized text.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<em>' + jwl_sel_content3 + '</em>');">&#60;em&#62;</a>
</td>
<td class="mybutton" title="Specifies a horizontal rule.">
<a style="display:block;width:100%;height:100%;" href="tags/hr.php" onClick="window.close();">&#60;hr&#62;</a>
</td>
<td class="mybutton" title="Specifies measurement within a predefined range.">
<a style="display:block;width:100%;height:100%;" href="tags/meter.php" onClick="window.close();">&#60;meter&#62;</a>
</td>
<td class="mybutton" title="Specifies sample computer code..">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<samp>' + jwl_sel_content3 + '</samp>');">&#60;samp&#62;</a>
</td>
<td class="mybutton" title="Specifies a table header.">
<a style="display:block;width:100%;height:100%;" href="tags/th.php" onClick="window.close();">&#60;th&#62;</a>
</td>
</tr>
<tr>
<td class="mybutton" title="Define graphics.">
<a style="display:block;width:100%;height:100%;" href="tags/canvas.php" onClick="window.close();">&#60;canvas&#62;</a>
</td>
<td class="mybutton" title="Specifies external application or interactive content.">
<a style="display:block;width:100%;height:100%;" href="tags/embed.php" onClick="window.close();">&#60;embed&#62;</a>
</td>
<td class="mybutton" title="Specifies an HTML document.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<html>' + jwl_sel_content3 + '</html>');">&#60;html&#62;</a>
</td>
<td class="mybutton" title="Specifies navigational links.">
<a style="display:block;width:100%;height:100%;" href="tags/nav.php" onClick="window.close();">&#60;nav&#62;</a>
</td>
<td class="mybutton" title="Specifies a script.">
<a style="display:block;width:100%;height:100%;" href="tags/script.php" onClick="window.close();">&#60;script&#62;</a>
</td>
<td class="mybutton" title="Specifies a table header.">
<a style="display:block;width:100%;height:100%;" href="javascript:;" onClick="tinyMCEPopup.close();" onMouseDown="tinyMCE.execCommand('mceInsertContent',false,'<thead>' + jwl_sel_content3 + '</thead>');">&#60;thead&#62;</a>
</td>
</tr>
</tbody>
</table>
</div>

<div class="bottom">
    <p>{#tagwrap_dlg.bottomnote}</p>
    <p class="pagelink_hover">{#tagwrap_dlg.bottomnote2}<span style="float:right;"><a target="_blank" href="http://www.joshlobe.com/2012/07/ultimate-tinymce-advanced-html-tags/"><img src="img/tinymce_help.png" /></a></span></p>
</div>

<div class="mceActionPanel">
  <div style="float:left;padding-top:5px">
  </div>
</div>
</form>
</body>
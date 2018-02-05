$(function () {
	var note = $("#note");
	$("ul.index-list li").click(function () {
		note.load( "skills/" + skill + "/" + this.dataset.file + ".html");
	});
});
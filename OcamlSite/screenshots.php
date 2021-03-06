<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Screenshots</title>
    <?php require("header.php"); ?>
</head>
<body>
<?php $current="screenshots"; require("menu.php"); ?>

<div id="page">

    <h1>Screenshots</h1>

    <h2>Module Completion</h2>

    <img src="screenshots/completionModules.png" alt="modules completion"/>
    <br>
    Type a "B" and Ctrl+Space, and you get all the modules that start with a "B", along with their description
    extracted from their ocamldoc comments.


    <h2>Members Completion</h2>

    <img src="screenshots/completionMembers.png" alt="members completion"/>
    <br>
    If you type "Buffer.", a completion box automatically appears when you type the ".", with all the elements
    in the "Buffer" module, along with their description.

    <h2>Code Outline</h2>

    <img src="screenshots/outline.png" alt="outline"/>
    <br>
    The code outline, which allows you to have an overview of all the definitions in your code, and to jump to a
    definition
    by clicking on it.


    <h2>Type pop-ups</h2>

    <img src="screenshots/dtypes.png" alt="type pop-ups"/>
    <br>
    When you hover the mouse over a variable in a file compiled with the "-dtypes" option, you get this popup.

    <h2>Information pop-ups</h2>

    <img src="screenshots/infoPopup.png" alt=""/>
    <br>
    Press <b>F2</b> while the cursor is on a module or variable in your code to get information about that element (this
    is the same information you would get while using completion).

    <h2>Hyperlinks</h2>

    <img src="screenshots/hyperlinks.png" alt=""/>
    <br>
    Press <b>Ctrl</b> and click on any module, variable, function, constructor, etc. to jump to its definition.

    <h2>Help on expected parameters</h2>

    <img src="screenshots/paramHelp.png" alt=""/>
    <br>
    When you use completion to enter a function, exception or type constructor, this popup automatically appears to
    tell you the types of expected arguments.

    <h2>Project Navigator</h2>

    <img src="screenshots/navigator.png" alt=""/>
    <br>
    This is the project navigator view, which you use to manage your OCaml projects in Eclipse.

    <h2>Error markers in the editor</h2>

    <img src="screenshots/errorMarkers.png" alt=""/>
    <br>
    When the OCaml compiler reported warnings or errors, they appear in the editor as squiggly lines. You can
    get an explanation of the error by hovering your mouse over it.

    <h2>Error markers in the navigator</h2>

    <img src="screenshots/errorMarkers2.png" alt=""/>
    <br>
    Error markers also appear in the navigator view, to give you a quick overview of which files have problems and
    which ones do not.

    <h2>Module Browser</h2>

    <img src="screenshots/browser.png" alt=""/>
    <br>
    This is the module browser, which allows you to browse the OCaml library from inside Eclipse.

    <h2>Toplevel</h2>

    <img src="screenshots/toplevel.png" alt=""/>
    <br>
    The integrated toplevel, which supports command history, interrupting the current computation, quick loading of
    modules
    from your Eclipse projects,...

</div>
</body>
</html>
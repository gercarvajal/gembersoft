<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.4.0/fabric.min.js"></script>
<style>.property-box {
  padding: 10px; 
  margin: 5px; 
  border: 1px solid gainsboro;
}

.colorbox {
  width: 70px; 
  height: 35px; 
  border: 1px solid black;
}

.btn-sm {
  min-width: 50px;
}</style>
<body>
  <br><br><br><br>
  
  <div ng-app="app">
  <div ng-controller="MainController as main" layout="row">
    <div>
      <canvas id="c"></canvas>
    </div>
    <div flex>
      <h2 style="text-align: center;">Toolbox</h2>
      <div>
        <md-button class="md-raised" ng-click="main.addText()">Add Text
        </md-button>
        <md-button class="md-raised" ng-click="main.addRect()">Add Rectangle
        </md-button>
        <md-button class="md-raised" ng-click="main.addCircle()">Add Circle
        </md-button>
        <md-button class="md-raised" ng-click="main.addTriangle()">Add Triangle
        </md-button>
        <md-button class="md-raised" ng-click="main.addImage($event)">Add Image
        </md-button>
        <md-button class="md-raised md-warn" ng-click="main.remove()">Remove
        </md-button>
      </div>
      <div ng-show="main.activeObject" class="property-box">
        <div ng-show="main.activeObject.type !== 'image'">
          <md-color-menu color="main.color">
            <div class="colorbox" ng-style="main.getStyle()">
            </div>
          </md-color-menu>
          <span>Fill: {{main.activeObject.fill}}</span>
        </div>
        <div>
          <md-slider-container>
            <span>Opacity</span>
            <md-slider
                       ng-model="main.opacity"
                       ng-change="main.setOpacity()"
                       min="0" 
                       max="100"
                       step="1"
                       class="md-primary">
            </md-slider>
            <md-input-container>
              <input  
                     ng-model="main.opacity"
                     ng-change="main.setOpacity()" />
            </md-input-container>
          </md-slider-container>
        </div>
        <div layout="row">
          <md-button class="md-raised btn-sm" ng-click="main.activeObject.bringForward()">↑
            <md-tooltip md-direction="bottom">Bring forward</md-tooltip>
          </md-button>
          <md-button class="md-raised btn-sm" ng-click="main.activeObject.bringToFront()">⇑
            <md-tooltip md-direction="bottom">Bring to front</md-tooltip>
          </md-button>
          <md-button class="md-raised btn-sm" ng-click="main.activeObject.sendBackwards()">↓
            <md-tooltip md-direction="bottom">Send backwards</md-tooltip>
          </md-button>
          <md-button class="md-raised btn-sm" ng-click="main.activeObject.sendToBack()">⇓
            <md-tooltip md-direction="bottom">Send to back</md-tooltip>
          </md-button>
        </div>
      </div>
      <div ng-show="main.activeObject.type === 'i-text'" class="property-box">
        <div>
          <span>Font size: {{ main.getFontSize() }}
          </span><br />
          <span>Font family: {{main.activeObject.fontFamily}}
          </span><br />
          <span>Text align: {{main.activeObject.textAlign}}
          </span><br />
        </div>
      </div>
    </div>
  </div>
</div>

<script>

module app {
  class MainController {
    canvas: fabric.Canvas;
    activeObject: fabric.Object;
    color: any;
    opacity: number;
    
    static $inject = ['$scope', 'mdPickerColors', '$mdDialog'];
    
    constructor(private $scope: ng.IScope, private mdPickerColors: any, private dlg: any) {
      this.initCanvas();
      this.addText();
      this.canvas.setActiveObject(this.canvas.item(0));
      window.addEventListener('resize', this.onWindowResize);
    }
    
    initCanvas = () => {
      this.canvas = new fabric.Canvas('c');
      this.canvas.setDimensions({
        width: window.innerWidth * 0.7,
        height: window.innerHeight
      });
      this.canvas.setBackgroundColor('#565656', this.canvas.renderAll.bind(this.canvas));
      
      // extra canvas settings
      this.canvas.preserveObjectStacking = true;
      this.canvas.stopContextMenu = true;
      
      this.canvas.on('object:selected', () => {
        this.$scope.$evalAsync(() => {
          this.activeObject = this.canvas.getActiveObject();
          this.color = this.mdPickerColors.getColor(this.activeObject.get('fill'));
          this.opacity = this.activeObject.get('opacity') * 100;
        });
      });
      
      this.canvas.on('selection:cleared', () => {
        this.$scope.$evalAsync(() => {
          this.activeObject = null; 
          this.color = null;
          this.opacity = 0;
        });
      });
      
      this.canvas.on('selection:updated', () => {
        this.$scope.$evalAsync(() => {
          this.activeObject = this.canvas.getActiveObject();
          this.color = this.mdPickerColors.getColor(this.activeObject.get('fill'));
          this.opacity = +(this.activeObject.get('opacity') * 100).toFixed();
        });
      });
    }
    
    onWindowResize = () => {
      this.canvas.setDimensions({
        width: window.innerWidth * 0.7,
        height: window.innerHeight
      });
    }
    
    addText = () => {
      let text = new fabric.IText('Sample Text', {
        left: this.canvas.width / 2,
        top: this.canvas.height / 2,
        fill: '#e0f7fa',
        fontFamily: 'sans-serif',
        hasRotatingPoint: false,
        centerTransform: true,
        originX: 'center',
        originY: 'center',
        lockUniScaling: true
      });
      
      this.canvas.add(text);
      
      text.on('scaling', () => {
        this.$scope.$evalAsync();
      });
    }
    
    addRect = () => {
      this.canvas.add(new fabric.Rect({
        left: this.canvas.width / 2,
        top: this.canvas.height / 2,
        fill: '#ffa726',
        width: 100,
        height: 100,
        originX: 'center',
        originY: 'center',
        strokeWidth: 0
      }));
    }
    
    addCircle = () => {
      this.canvas.add(new fabric.Circle({
        left: this.canvas.width / 2,
        top: this.canvas.height / 2,
        fill: '#26a69a',
        radius: 50,
        originX: 'center',
        originY: 'center',
        strokeWidth: 0
      }));
    }
    
    addTriangle = () => {
      this.canvas.add(new fabric.Triangle({
        left: this.canvas.width / 2,
        top: this.canvas.height / 2,
        fill: '#78909c',
        width: 100,
        height: 100,
        originX: 'center',
        originY: 'center',
        strokeWidth: 0
      }));
    }
    
    addImage = (ev) => {
      let confirm = this.dlg.prompt()
        .title('Add Image')
        .textContent('Copy and paste link of the image:')
        .placeholder('http://myimageurl.com')
        .ariaLabel('Image Url')
        .targetEvent(ev)
        .ok('Ok')
        .cancel('Cancel');

      this.dlg.show(confirm).then((result) => {
        fabric.Image.fromURL(result, (img) => {
          this.canvas.add(img); 
        });
      });
    }
    
    remove = () => {
      let activeObjects = this.canvas.getActiveObjects();
      this.canvas.discardActiveObject();
      if (activeObjects.length) {
        this.canvas.remove.apply(this.canvas, activeObjects);
      }
    }
    
    getStyle = () => {
         if (this.activeObject != null) {
            if (this.color != null) {
               if (this.color.hex !== this.activeObject.fill.toLowerCase()) {
                  this.activeObject.set('fill', this.color.hex);
                  this.canvas.requestRenderAll();
               }

               return this.color.style;
            }
            else {
               return {
                  'background-color': this.activeObject.fill,
                  'color': this.activeObject.fill
               };
            }
         }
      }
    
      getFontSize = () => {
        if (!this.activeObject) {
          return 0;
        }
        
        let size = this.activeObject.fontSize || 0;
        return +(size * this.activeObject.scaleX).toFixed();
      }  
    
      setOpacity = () => {
        if (this.opacity < 0) {
          this.opacity = 0;
        }
        
        if (this.opacity > 100) {
          this.opacity = 100;
        }
        
        this.activeObject.set('opacity', this.opacity / 100);
        this.canvas.requestRenderAll();
      }
  }
  
  angular
    .module('app', ['ngMaterial', 'mdColorMenu'])
    .controller('MainController', MainController);
}
</script>
<script src="editarl.js"></script>
</body>
</html>

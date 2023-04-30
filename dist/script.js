"use strict";
var app;
(function (app) {
    class MainController {
        constructor($scope, mdPickerColors, dlg) {
            this.$scope = $scope;
            this.mdPickerColors = mdPickerColors;
            this.dlg = dlg;
            this.initCanvas = () => {
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
            };
            this.onWindowResize = () => {
                this.canvas.setDimensions({
                    width: window.innerWidth * 0.7,
                    height: window.innerHeight
                });
            };
            this.addText = () => {
                let fontSelect = document.getElementById('font-select');
                let font = fontSelect.options[fontSelect.selectedIndex].value;
                let text = new fabric.IText('Sample Text', {
                    left: this.canvas.width / 2,
                    top: this.canvas.height / 2,
                    fill: '#e0f7fa',
                    fontFamily: font,
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
            };
            
            this.addImage = (ev) => {
                let input = document.createElement('input');
                input.type = 'file';
                input.accept = 'image/*';
                input.onchange = (e) => {
                    let file = e.target.files[0];
                    let reader = new FileReader();
                    reader.onload = (event) => {
                        let img = new fabric.Image();
                        img.setSrc(event.target.result, () => {
                            this.canvas.add(img);
                        });
                    };
                    reader.readAsDataURL(file);
                };
                
                input.click();
            };

            this.addImageFromRepo = () => {
                let imgUrl = 'resource/images/Lapidas/model1.png'; // reemplaza esto con la ruta de tu imagen
                let img = new fabric.Image();
                img.setSrc(imgUrl, () => {
                  this.canvas.add(img);
                });
              };

            this.remove = () => {
                let activeObjects = this.canvas.getActiveObjects();
                this.canvas.discardActiveObject();
                if (activeObjects.length) {
                    this.canvas.remove.apply(this.canvas, activeObjects);
                }
            };
            this.getStyle = () => {
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
            };
            this.getFontSize = () => {
                if (!this.activeObject) {
                    return 0;
                }
                let size = this.activeObject.fontSize || 0;
                return +(size * this.activeObject.scaleX).toFixed();
            };
            this.setOpacity = () => {
                if (this.opacity < 0) {
                    this.opacity = 0;
                }
                if (this.opacity > 100) {
                    this.opacity = 100;
                }
                this.activeObject.set('opacity', this.opacity / 100);
                this.canvas.requestRenderAll();
            };
            this.initCanvas();
            //this.addText();
            //this.addImage();
            //this.addCircle();
            this.addRectdefault();

            this.canvas.setActiveObject(this.canvas.item(0));
            window.addEventListener('resize', this.onWindowResize);
        }
    }
    MainController.$inject = ['$scope', 'mdPickerColors', '$mdDialog'];
    angular
        .module('app', ['ngMaterial', 'mdColorMenu'])
        .controller('MainController', MainController);
})(app || (app = {}));
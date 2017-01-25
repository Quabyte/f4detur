/**
 * Seat Class
 *
 * @type {fabric object}
 */
fabric.Seat = new fabric.util.createClass(fabric.Circle, {

    type: 'seat',

    /**
     * Initializer
     *
     * @param  {[array]} options Options array for zone.
     * @return {[object]}
     */
    initialize: function(options) {
        options || (options = { });

        this.callSuper('initialize', options);
        this.set('number', options.number || 'Number not set!');
        this.set('row', options.row || '');
        this.set('status', options.status || 'IA');
        this.set('zoneNumber', options.zoneNumber || '');

        // Defaults
        this.set('fill', options.fill || '#fff');
        this.set('hasBorders', options.hasBorders || false);
        this.set('hasControls', options.hasControls || false);
        this.set('hasRotatingPoint', options.hasRotatingPoint || false);
        this.set('hoverCursor', options.hoverCursor || 'pointer');
        this.set('lockMovementX', options.lockMovementX || true);
        this.set('lockMovementY', options.lockMovementY || true);
        this.set('lockRotation', options.lockRotation || true);
        this.set('radius', options.radius || 20);
        this.set('stroke', options.stroke || '#3aa99e');
        this.set('strokeWidth', options.strokeWidth || 3);
    },

    /**
     * Convert to object
     *
     * @return {[object]}
     */
    toObject: function() {
        return fabric.util.object.extend(this.callSuper('toObject'), {
            number: this.get('number'),
            row: this.get('row'),
            status: this.get('status'),
            zoneNumber: this.get('zoneNumber'),
        });
    },

    /**
     * Canvas renderer
     */
    _render: function(ctx) {
      this.callSuper('_render', ctx);

      ctx.font = '20px Helvetica';
      ctx.fillStyle = '#333';
      ctx.fillText(this.number, -this.radius/2 + 4, -this.radius/2 + 16);
    }
});

fabric.Seat.fromObject = function (object, callback, forceAsync) {
    return fabric.Object._fromObject('Seat', object, callback, forceAsync)
};

// var canvas = new fabric.Canvas('c');
//
// var json2 = '{"objects":[{"type":"seat","originX":"left","originY":"top","left":0,"top":0,"width":40,"height":40,"fill":"#fff","stroke":"#3aa99e","strokeWidth":3,"strokeDashArray":null,"strokeLineCap":"butt","strokeLineJoin":"miter","strokeMiterLimit":10,"scaleX":1,"scaleY":1,"angle":0,"flipX":false,"flipY":false,"opacity":1,"shadow":null,"visible":true,"clipTo":null,"backgroundColor":"","fillRule":"nonzero","globalCompositeOperation":"source-over","transformMatrix":null,"skewX":0,"skewY":0,"radius":20,"startAngle":0,"endAngle":6.283185307179586,"number":1,"row":5,"status":"RS","zoneNumber":126}]}';
//
// canvas.loadFromJSON(json2);
// canvas.renderAll();

let  Bubble b1;
let Bubble b2;

Void setup (){
    size(640. 360);
    b1 = new Bubble(64);
    b2 = new Bubble(16);
}

void draw() {
    background(225);
    b1.ascend();
    b1.display();
    b1.top();

    b2.acsend();
    b2.display();
}

int[] nums;
nums = new int [7];
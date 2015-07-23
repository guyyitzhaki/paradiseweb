
/* @pjs preload="assets/map/0.png, assets/map/1.png, assets/map/2.png"; */
/* @pjs preload="assets/map/3.png, assets/map/4.png, assets/map/5.png"; */
/* @pjs preload="assets/map/6.png, assets/map/7.png, assets/map/8.png"; */
/* @pjs preload="assets/map/9.png, assets/map/10.png, assets/map/11.png"; */
/* @pjs preload="assets/map/12.png, assets/map/13.png"; */
/* @pjs preload="assets/map/plus.png, assets/map/plus-active.png, assets/map/plus-disabled.png"; */
/* @pjs preload="assets/map/minus.png, assets/map/minus-active.png, assets/map/minus-disabled.png"; */


final int W = 1144, H = 493;
final int ZOOM_X = W - 50, ZOOM_Y = H - 80, ZOOM_W=29, ZOOM_H=58; 
final int ZOOM_LEVELS = 14;
PImage minus, plus, minusActive, plusActive, plusDisabled, minusDisabled;
PImage[] levels = new PImage[ZOOM_LEVELS];
int zoom;
int lastClick;


void setup() {
  size(1144, 493);
  for (int i = 0; i < ZOOM_LEVELS; i++) {
    levels[i] = loadImage("assets/map/"+i + ".png");
  }
  minus = loadImage("assets/map/minus.png");
  plus = loadImage("assets/map/plus.png");
  minusActive = loadImage("assets/map/minus-active.png");
  plusActive = loadImage("assets/map/plus-active.png");
  plusDisabled = loadImage("assets/map/plus-disabled.png");
  minusDisabled = loadImage("assets/map/minus-disabled.png");
  zoom = 3;
  lastClick = 0;
}

void draw() {
  image(levels[zoom], 0, 0, width, height);
  boolean insidePlus = false, insideMinus = false;
  if (mouseX >= ZOOM_X && mouseX <= ZOOM_X + ZOOM_W) {
    if (mouseY >= ZOOM_Y && mouseY <= ZOOM_Y + plus.height) {
      insidePlus = true;
    }
    if (mouseY >= ZOOM_Y+plus.height && mouseY <= ZOOM_Y + plus.height+minus.height) {
      insideMinus = true;
    }
  }
  PImage plusImage = plus;
  if (zoom == 0) {
    plusImage = plusDisabled;
  } 
  else if (insidePlus) {
    plusImage = plusActive;
  }

  PImage minusImage = minus;
  if (zoom == (ZOOM_LEVELS - 1)) {
    minusImage = minusDisabled;
  }
  else if (insideMinus) {
    minusImage = minusActive;
  }
  image(plusImage, ZOOM_X, ZOOM_Y);
  image(minusImage, ZOOM_X, ZOOM_Y+plus.height);
}

void zoomIn() {
  if (zoom > 0) {
    zoom--;
  }
}

void zoomOut() {
  if (zoom < ZOOM_LEVELS-1) {
    zoom++;
  }
}

void mouseClicked(MouseEvent mouseEvent) {
  if (mouseX >= ZOOM_X && mouseX <= ZOOM_X + ZOOM_W) {
    if (mouseY >= ZOOM_Y && mouseY <= ZOOM_Y + plus.height + minus.height) {
      if (mouseY >= ZOOM_Y && mouseY <= ZOOM_Y + plus.height) {
        zoomIn();
      }
      if (mouseY >= ZOOM_Y+plus.height && mouseY <= ZOOM_Y + plus.height+minus.height) {
        zoomOut();
      }
    }
  }
  else {
    if (millis() - lastClick < 500) {
      zoomIn();
    }
    lastClick = millis();
  }
}

class User {
  constructor(name) {
    this.name = name;
  }
  show() {
    console.log(this.name);
  }
}
let hd = new User("后盾人");
hd.show();

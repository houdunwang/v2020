class Lesson {
  data = [];
  init() {
    this.data = [{ name: "js" }, { name: "vue.js" }];
  }
  get() {
    return this.data;
  }
}
let obj = new Lesson();
obj.init();
export { obj };

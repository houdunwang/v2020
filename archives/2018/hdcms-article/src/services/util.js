import wepy from 'wepy'

const host = 'http://laravel-cms.houdunren.com/api'
const util = {
  // 请求普通接口
  api: async (options) => {
    wepy.showLoading({title: '加载中...'})
    options.url = host + '/' + options.url
    let response = await wepy.request(options)
    wepy.hideLoading()
    return response
  },
  // 需要验证接口
  authApi: async (options) => {
    let token = util.getToken()
    options.header = options.header ? options.header : {}
    options.header.Authorization = 'Bearer ' + token
    return await util.api(options)
  },
  login: async (options) => {
    options.method = 'POST'
    options.url = 'login'
    let response = await util.api(options)
    if (response.statusCode === 200) {
      response.data.expires_in = new Date().getTime() + response.data.expires_in * 1000
      wepy.setStorageSync('token', response.data)
    }
    return response
  },
  logout: async () => {
    let response = util.authApi({url: 'logout'})
    if (response.statusCode === 200) {
      wepy.removeStorageSync('token')
    }
    return response
  },
  getToken() {
    let token = wepy.getStorageSync('token')
    if (token) {
      return new Date().getTime() < token.expires_in ? token.access_token : null
    }
  }
}

export default util

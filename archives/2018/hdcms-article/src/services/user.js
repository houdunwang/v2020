import util from '@/services/util'

const user = {
  info: async () => {
    return util.authApi({url: 'me'})
  }
}
export default user

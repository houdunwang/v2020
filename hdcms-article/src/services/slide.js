import util from '@/services/util'

const slide = {
  get: async (limit = 3) => {
    let response = await util.api({url: 'slides', data: {limit: limit}})
    if (response.statusCode === 200) {
      return response
    }
  }
}
export default slide

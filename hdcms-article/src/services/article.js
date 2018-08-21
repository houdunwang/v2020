import util from '@/services/util'

const article = {
  paginate: async (page = 1, params = {}) => {
    params.page = page
    params.include = 'category'
    return await util.api({url: 'contents', data: params})
  },
  getById: async (id) => {
    return await util.api({url: 'contents/' + id})
  }
}
export default article

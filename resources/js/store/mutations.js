export const mutations = {
    modalTitle(state, title) {
        state.modalTitle = title;
    },
    formObject(state, object) {
        state.formObject = object;
    },
    formFilter(state, object) {
        state.formFilter = object;
    },
    formType(state, type) {
        state.formType = type;
    },
    dataList(state, data) {
        state.dataList = data;
    },
    updateId(state, id) {
        state.updateId = id;
    },
    Config(state, data) {
        state.Config = data;
    },
    allMenus(state, data) {
        state.allMenus = data;
    },
    Permissions(state, data) {
        state.Permissions = data;
    },
    resetFilter(state, data) {
        state.filter = data;
    },
    httpRequest(state, data) {
        state.httpRequest = data;
    },
    requiredData(state, data) {
        state.requiredData = data;
    },
    currentPage(state, data) {
        state.currentPage = data;
    },

    currentPagination(state, data) {
        state.currentPagination = data;
    },
    detailsData(state, data) {
        state.detailsData = data;
    },
    authUser(state, data) {
        state.authUser = data;
    },
    appConfig(state, data) {
        state.appConfig = data;
    },

    uploadProgress(state, data) {
        state.uploadProgress = data;
    },
}

from data_base import anime_data

def get_all():
    return anime_data()

def get_name(name):
    data = []
    list_name = name.split("+")
    new_name = " ".join(list_name)
    for item in anime_data():
        if new_name in item["name"]:
            data.append(item)
    return data

# def get_genres(genres):
#     data = []
#     for item in anime_data():
#         if genres in item["genres"]:
#             data.append(item)
#     return data
